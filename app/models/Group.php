<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends MY_Model
{
    public static $limit = '10';

    protected $soft_deletes = TRUE;

    protected $fillable = [
        'name',
        'description',
    ];

    public $has_many_pivot = ['permissions' => ['foreign_model' => 'Permission', 'pivot_table' => 'group_permission', 'local_key' => 'id', 'pivot_local_key' => 'group_id', 'pivot_foreign_key' => 'permission_id', 'foreign_key' => 'id', 'get_relate' => TRUE]];
}
