<?php

namespace App\services;

use DirectoryIterator;

class PermissionService
{
    private static $prefix_verb = ['browse', 'read', 'edit', 'add', 'delete'];

    private static $exclude = ['Ion_auth_model', 'Group_permission'];

    /**
     * Static method to generate permission table
     *
     * @param string|null $model
     * @param array $except
     */
    public static function run(string $model = null)
    {
        if(!is_null($model)) {
            self::insertCrudPermission($model);
        } else {
            $dir = new DirectoryIterator(APPPATH . 'models');

            self::initTable();

            foreach ($dir as $file) {
                if ($file->isFile() && $file->getExtension() == 'php') {
                    $model = str_replace('.php','',$file->getBasename());
                    if(!in_array($model, self::$exclude)) {
                        self::insertCrudPermission($model);
                    }
                }
            }

        }
    }

    public static function permissions()
    {
        ci()->load->model('permission');

        return ci()->permission->all()->toArray();
    }

    public static function give(string $email, array $permissions)
    {
        ci()->load->model('user');

        $user = ci()->user->where('email', $email)->with_group(['with' => ['relation' => 'permissions']])->get();

        $permissions = array_filter($permissions, function($permission) {
            return array_search($permission->key, array_column(self::permissions(), 'key'));
        });

        $all_permissions = array_unique(array_merge((array)$user->group->permissions, $permissions), SORT_REGULAR);

        self::updatePermissionTable($user->group_id, $all_permissions);
    }

    public static function revoke(string $email, array $permissions)
    {
        ci()->load->model('user');

        $user = ci()->user->where('email', $email)->with_group(['with' => ['relation' => 'permissions']])->get();

        $permissions = array_filter(
            (array) $user->group->permissions,
            function($permission) use ($permissions) {
                return !array_search($permission->key, array_column($permissions, 'key'));
            }
        );

        self::updatePermissionTable($user->group_id, $permissions);
    }

    public static function super(string $email = null)
    {
        return self::give($email, self::permissions());
    }

    public static function clear(string $email = null)
    {
        return self::revoke($email, self::permissions());
    }

    private static function getTableName(string $model): string
    {
        return plural(strtolower($model));
    }

    private static function initTable()
    {
        ci()->load->model('permission');

        ci()->db->query('SET foreign_key_checks = 0;');

        ci()->db->truncate('permissions');

        ci()->db->query('SET foreign_key_checks = 1;');

        ci()->permission->insert(['key' => 'browse_admin']);
    }

    private static function insertCrudPermission(string $model)
    {
        ci()->load->model('permission');

        $table = self::getTableName($model);

        foreach(self::$prefix_verb as $verb) {

            $data = [
                'key' => $verb . '_' . $table,
                'table_name' => $table,
            ];

            ci()->permission->insert($data);
        }
    }

    private static function updatePermissionTable(int $group_id, array $permissions)
    {
        ci()->db->delete('group_permission', ['group_id' => $group_id]);

        foreach ($permissions as $permission) {
            ci()->db->insert('group_permission', [
                'group_id' => $group_id,
                'permission_id'  => $permission->id
            ]);
        }
    }
}
