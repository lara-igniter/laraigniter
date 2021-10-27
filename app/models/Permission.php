<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Permission extends MY_Model
{
    protected $fillable = [
        'key',
        'table_name'
    ];
}
