<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Model
{
    public static $limit = '10';

    protected $soft_deletes = TRUE;

    protected $fillable = [
        'group_id',
        'ip_address',
        'username',
        'password',
        'email',
        'activation_selector',
        'activation_code',
        'forgotten_password_selector',
        'forgotten_password_code',
        'forgotten_password_time',
        'remember_selector',
        'remember_code',
        'created_on',
        'last_login',
        'active',
        'first_name',
        'last_name',
        'company',
        'phone',
    ];

    public $has_one = ['group' => ['Group', 'id','group_id']];

    public $has_many_pivot = ['groups' => ['foreign_model' => 'Group', 'pivot_table' => 'user_group', 'local_key' => 'id', 'pivot_local_key' => 'user_id', 'pivot_foreign_key' => 'group_id', 'foreign_key' => 'id', 'get_relate' => TRUE]];
}
