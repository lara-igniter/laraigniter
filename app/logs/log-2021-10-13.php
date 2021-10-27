<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-10-13 04:22:06 --> Query error: Unknown column 'ci_users.deleted_at' in 'where clause' - Invalid query: SELECT *
FROM `ci_users`
WHERE `id` = '1'
AND ci_users.deleted_at IS NULL
 LIMIT 1
ERROR - 2021-10-13 04:23:08 --> Severity: error --> Exception: Unable to locate the model you have specified: Group C:\laragon\www\teba\application\core\MY_Loader.php 355
ERROR - 2021-10-13 04:24:15 --> Severity: error --> Exception: Call to undefined function true() C:\laragon\www\teba\application\core\MY_Model.php 1199
ERROR - 2021-10-13 04:26:19 --> Severity: error --> Exception: Call to undefined function true() C:\laragon\www\teba\application\core\MY_Model.php 1199
ERROR - 2021-10-13 04:26:43 --> Severity: error --> Exception: Call to undefined function true() C:\laragon\www\teba\application\core\MY_Model.php 1199
ERROR - 2021-10-13 04:27:00 --> Severity: error --> Exception: Call to undefined function true() C:\laragon\www\teba\application\core\MY_Model.php 1199
ERROR - 2021-10-13 04:28:13 --> Query error: Unknown column 'ci_users.user_id' in 'field list' - Invalid query: SELECT *, `ci_users`.`user_id`
FROM `ci_users`
WHERE `id` = '1'
 LIMIT 1
ERROR - 2021-10-13 04:28:34 --> Query error: Table 'teba.ci_groups_users' doesn't exist - Invalid query: SELECT `ci_groups`.`user_id`, `ci_groups_users`.`users_id`
FROM `ci_groups`
LEFT JOIN `ci_groups_users` ON `ci_groups`.`user_id` = `ci_groups_users`.`groups_user_id`
LEFT JOIN `ci_users` ON `ci_groups_users`.`users_id` = `ci_users`.`id`
WHERE `ci_groups_users`.`users_id` IN('1')
ERROR - 2021-10-13 04:30:18 --> Query error: Table 'teba.ci_groups_users' doesn't exist - Invalid query: SELECT `ci_groups`.`user_id`, `ci_groups_users`.`users_id`
FROM `ci_groups`
LEFT JOIN `ci_groups_users` ON `ci_groups`.`user_id` = `ci_groups_users`.`groups_user_id`
LEFT JOIN `ci_users` ON `ci_groups_users`.`users_id` = `ci_users`.`id`
WHERE `ci_groups_users`.`users_id` IN('1')
ERROR - 2021-10-13 04:30:25 --> Severity: Notice --> Undefined variable: user C:\laragon\www\teba\application\controllers\admin\ProfileController.php 26
ERROR - 2021-10-13 04:30:25 --> Severity: Notice --> Trying to get property 'id' of non-object C:\laragon\www\teba\application\controllers\admin\ProfileController.php 26
ERROR - 2021-10-13 04:33:08 --> Severity: Notice --> Undefined variable: user C:\laragon\www\teba\application\controllers\admin\ProfileController.php 28
ERROR - 2021-10-13 04:33:18 --> Query error: Table 'teba.ci_groups_users' doesn't exist - Invalid query: SELECT `ci_groups`.`user_id`, `ci_groups_users`.`users_id`
FROM `ci_groups`
LEFT JOIN `ci_groups_users` ON `ci_groups`.`user_id` = `ci_groups_users`.`groups_user_id`
LEFT JOIN `ci_users` ON `ci_groups_users`.`users_id` = `ci_users`.`id`
WHERE `ci_groups_users`.`users_id` IN('1')
ERROR - 2021-10-13 04:34:29 --> Severity: error --> Exception: Call to undefined function true() C:\laragon\www\teba\application\core\MY_Model.php 1199
ERROR - 2021-10-13 04:34:38 --> Severity: error --> Exception: Call to undefined function true() C:\laragon\www\teba\application\core\MY_Model.php 1199
ERROR - 2021-10-13 04:49:19 --> Severity: Error --> Method Xiaoler\Blade\View::__toString() must not throw an exception, caught Error: Class 'Symfony\Component\Debug\Exception\FatalThrowableError' not found C:\laragon\www\teba\application\libraries\Blade.php 0
ERROR - 2021-10-13 05:45:01 --> Severity: Notice --> Trying to get property 'id' of non-object C:\laragon\www\teba\application\controllers\auth\AuthController.php 65
ERROR - 2021-10-13 05:45:01 --> Severity: Notice --> Trying to get property 'first_name' of non-object C:\laragon\www\teba\application\controllers\auth\AuthController.php 51
ERROR - 2021-10-13 05:45:01 --> Severity: Notice --> Trying to get property 'last_name' of non-object C:\laragon\www\teba\application\controllers\auth\AuthController.php 52
ERROR - 2021-10-13 05:45:01 --> Severity: Notice --> Trying to get property 'first_name' of non-object C:\laragon\www\teba\application\helpers\custom_helper.php 318
ERROR - 2021-10-13 05:45:01 --> Severity: Notice --> Trying to get property 'last_name' of non-object C:\laragon\www\teba\application\helpers\custom_helper.php 318
ERROR - 2021-10-13 05:52:28 --> Severity: Notice --> Trying to get property 'first_name' of non-object C:\laragon\www\teba\application\helpers\custom_helper.php 318
ERROR - 2021-10-13 05:52:28 --> Severity: Notice --> Trying to get property 'last_name' of non-object C:\laragon\www\teba\application\helpers\custom_helper.php 318
ERROR - 2021-10-13 05:53:26 --> Severity: Notice --> Trying to get property 'first_name' of non-object C:\laragon\www\teba\application\helpers\custom_helper.php 318
ERROR - 2021-10-13 05:53:26 --> Severity: Notice --> Trying to get property 'last_name' of non-object C:\laragon\www\teba\application\helpers\custom_helper.php 318
ERROR - 2021-10-13 05:53:55 --> Severity: Notice --> Trying to get property 'first_name' of non-object C:\laragon\www\teba\application\helpers\custom_helper.php 318
ERROR - 2021-10-13 05:53:55 --> Severity: Notice --> Trying to get property 'last_name' of non-object C:\laragon\www\teba\application\helpers\custom_helper.php 318
ERROR - 2021-10-13 05:54:25 --> Severity: Notice --> Trying to get property 'first_name' of non-object C:\laragon\www\teba\application\helpers\custom_helper.php 318
ERROR - 2021-10-13 05:54:25 --> Severity: Notice --> Trying to get property 'last_name' of non-object C:\laragon\www\teba\application\helpers\custom_helper.php 318
ERROR - 2021-10-13 05:59:40 --> 404 Page Not Found: 
ERROR - 2021-10-13 06:08:47 --> Could not find the language line "btn_edit"
ERROR - 2021-10-13 06:39:12 --> 404 Page Not Found: 
ERROR - 2021-10-13 06:39:12 --> 404 Page Not Found: 
ERROR - 2021-10-13 06:40:40 --> 404 Page Not Found: 
ERROR - 2021-10-13 06:40:40 --> 404 Page Not Found: 
ERROR - 2021-10-13 09:15:01 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\teba\application\third_party\codeigniter-debugbar\libraries\Profiler.php 118
ERROR - 2021-10-13 09:15:01 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\teba\application\third_party\codeigniter-debugbar\libraries\Profiler.php 146
ERROR - 2021-10-13 09:15:01 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\teba\application\third_party\codeigniter-debugbar\libraries\Profiler.php 361
ERROR - 2021-10-13 09:15:10 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\teba\application\third_party\codeigniter-debugbar\libraries\Profiler.php 118
ERROR - 2021-10-13 09:15:10 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\teba\application\third_party\codeigniter-debugbar\libraries\Profiler.php 146
ERROR - 2021-10-13 09:15:10 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\teba\application\third_party\codeigniter-debugbar\libraries\Profiler.php 361
ERROR - 2021-10-13 09:18:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\teba\application\third_party\codeigniter-debugbar\libraries\Profiler.php 118
ERROR - 2021-10-13 09:18:24 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\teba\application\third_party\codeigniter-debugbar\libraries\Profiler.php 361
ERROR - 2021-10-13 09:20:00 --> Could not find the language line "entry_project_id"
ERROR - 2021-10-13 09:20:01 --> 404 Page Not Found: 
ERROR - 2021-10-13 09:20:05 --> Could not find the language line "entry_distribution_id"
ERROR - 2021-10-13 09:20:10 --> Could not find the language line "entry_project_id"
ERROR - 2021-10-13 09:20:11 --> 404 Page Not Found: 
ERROR - 2021-10-13 10:45:11 --> 404 Page Not Found: 
ERROR - 2021-10-13 17:12:45 --> Severity: error --> Exception: Class 'User' not found C:\laragon\www\teba\application\services\PageLimitService.php 15
ERROR - 2021-10-13 17:15:42 --> Severity: error --> Exception: Class 'User' not found C:\laragon\www\teba\application\services\PageLimitService.php 15
ERROR - 2021-10-13 17:16:02 --> Severity: Notice --> Undefined variable: users C:\laragon\www\teba\storage\framework\views\95f58902e441456baf5a5bad153dfea0e5c52507.php 23
ERROR - 2021-10-13 17:16:02 --> Severity: Notice --> Trying to get property 'firstItem' of non-object C:\laragon\www\teba\storage\framework\views\95f58902e441456baf5a5bad153dfea0e5c52507.php 23
ERROR - 2021-10-13 17:16:02 --> Severity: Notice --> Undefined variable: users C:\laragon\www\teba\storage\framework\views\95f58902e441456baf5a5bad153dfea0e5c52507.php 24
ERROR - 2021-10-13 17:16:02 --> Severity: Notice --> Trying to get property 'lastItem' of non-object C:\laragon\www\teba\storage\framework\views\95f58902e441456baf5a5bad153dfea0e5c52507.php 24
ERROR - 2021-10-13 17:16:02 --> Severity: Notice --> Undefined variable: users C:\laragon\www\teba\storage\framework\views\95f58902e441456baf5a5bad153dfea0e5c52507.php 25
ERROR - 2021-10-13 17:16:02 --> Severity: Notice --> Trying to get property 'total' of non-object C:\laragon\www\teba\storage\framework\views\95f58902e441456baf5a5bad153dfea0e5c52507.php 25
ERROR - 2021-10-13 17:16:02 --> Severity: Notice --> Undefined variable: users C:\laragon\www\teba\storage\framework\views\95f58902e441456baf5a5bad153dfea0e5c52507.php 26
ERROR - 2021-10-13 17:16:02 --> Severity: Notice --> Trying to get property 'pages' of non-object C:\laragon\www\teba\storage\framework\views\95f58902e441456baf5a5bad153dfea0e5c52507.php 26
ERROR - 2021-10-13 17:16:02 --> Severity: Notice --> Undefined variable: users C:\laragon\www\teba\storage\framework\views\95f58902e441456baf5a5bad153dfea0e5c52507.php 37
ERROR - 2021-10-13 17:16:02 --> Severity: Error --> Method Xiaoler\Blade\View::__toString() must not throw an exception, caught Error: Class 'Symfony\Component\Debug\Exception\FatalThrowableError' not found C:\laragon\www\teba\application\libraries\Blade.php 0
ERROR - 2021-10-13 17:16:18 --> Severity: Notice --> Undefined variable: product C:\laragon\www\teba\storage\framework\views\95f58902e441456baf5a5bad153dfea0e5c52507.php 48
ERROR - 2021-10-13 17:16:18 --> Severity: Notice --> Trying to get property 'quantity' of non-object C:\laragon\www\teba\storage\framework\views\95f58902e441456baf5a5bad153dfea0e5c52507.php 48
ERROR - 2021-10-13 17:16:18 --> Severity: Error --> Method Xiaoler\Blade\View::__toString() must not throw an exception, caught ErrorException: Property [id] does not exist on this collection instance. (View: C:\laragon\www\teba\resources\views\admin\users\index.blade.php) C:\laragon\www\teba\application\libraries\Blade.php 0
ERROR - 2021-10-13 17:16:37 --> Severity: Notice --> Undefined variable: product C:\laragon\www\teba\storage\framework\views\95f58902e441456baf5a5bad153dfea0e5c52507.php 48
ERROR - 2021-10-13 17:16:37 --> Severity: Notice --> Trying to get property 'quantity' of non-object C:\laragon\www\teba\storage\framework\views\95f58902e441456baf5a5bad153dfea0e5c52507.php 48
ERROR - 2021-10-13 17:16:37 --> Severity: Error --> Method Xiaoler\Blade\View::__toString() must not throw an exception, caught ErrorException: Property [id] does not exist on this collection instance. (View: C:\laragon\www\teba\resources\views\admin\users\index.blade.php) C:\laragon\www\teba\application\libraries\Blade.php 0
ERROR - 2021-10-13 17:17:09 --> Severity: Notice --> Undefined variable: products C:\laragon\www\teba\storage\framework\views\95f58902e441456baf5a5bad153dfea0e5c52507.php 76
ERROR - 2021-10-13 17:17:09 --> Severity: Notice --> Trying to get property 'links' of non-object C:\laragon\www\teba\storage\framework\views\95f58902e441456baf5a5bad153dfea0e5c52507.php 76
ERROR - 2021-10-13 17:48:46 --> Could not find the language line "entry_ops_code"
ERROR - 2021-10-13 17:48:46 --> Could not find the language line "entry_ops_code"
ERROR - 2021-10-13 17:48:46 --> Could not find the language line "entry_name"
ERROR - 2021-10-13 17:48:46 --> Could not find the language line "entry_name"
ERROR - 2021-10-13 17:48:46 --> Could not find the language line "entry_description"
ERROR - 2021-10-13 17:48:46 --> Could not find the language line "entry_category_id"
ERROR - 2021-10-13 17:48:46 --> Could not find the language line "entry_category_id"
ERROR - 2021-10-13 17:48:46 --> Could not find the language line "entry_quantity"
ERROR - 2021-10-13 17:48:46 --> Could not find the language line "entry_quantity"
ERROR - 2021-10-13 17:48:46 --> Could not find the language line "entry_fresh"
ERROR - 2021-10-13 17:48:46 --> Severity: Notice --> Undefined variable: radio_values C:\laragon\www\teba\storage\framework\views\3e11564d71121eaf79e606c66c6ac016158d207b.php 86
ERROR - 2021-10-13 17:48:46 --> Severity: Error --> Method Xiaoler\Blade\View::__toString() must not throw an exception, caught Error: Class 'Symfony\Component\Debug\Exception\FatalThrowableError' not found C:\laragon\www\teba\application\libraries\Blade.php 0
ERROR - 2021-10-13 17:56:41 --> Could not find the language line "entry_first_name"
ERROR - 2021-10-13 17:56:41 --> Could not find the language line "entry_first_name"
ERROR - 2021-10-13 17:56:41 --> Could not find the language line "entry_last_name"
ERROR - 2021-10-13 17:56:41 --> Could not find the language line "entry_last_name"
ERROR - 2021-10-13 17:56:41 --> Could not find the language line "entry_email"
ERROR - 2021-10-13 17:56:41 --> Could not find the language line "entry_email"
ERROR - 2021-10-13 17:56:41 --> Could not find the language line "entry_username"
ERROR - 2021-10-13 17:56:41 --> Could not find the language line "entry_username"
ERROR - 2021-10-13 17:56:41 --> Could not find the language line "entry_phone"
ERROR - 2021-10-13 17:56:41 --> Could not find the language line "entry_phone"
ERROR - 2021-10-13 17:56:41 --> Could not find the language line "entry_company"
ERROR - 2021-10-13 17:56:41 --> Could not find the language line "entry_company"
ERROR - 2021-10-13 18:02:55 --> Severity: error --> Exception: Class 'App\requests\admin\EditAddUserRequest' not found C:\laragon\www\teba\application\controllers\admin\UserController.php 72
ERROR - 2021-10-13 18:29:05 --> Could not find the language line "entry_password"
ERROR - 2021-10-13 18:29:05 --> Could not find the language line "entry_password_confirm"
ERROR - 2021-10-13 18:35:41 --> Severity: error --> Exception: The model name you are loading is the name of a resource that is already being used: ion_auth C:\laragon\www\teba\application\core\MY_Loader.php 275
ERROR - 2021-10-13 18:55:34 --> Could not find the language line "entry_group_id"
ERROR - 2021-10-13 18:55:34 --> Could not find the language line "entry_group_id"
ERROR - 2021-10-13 18:55:34 --> Could not find the language line "entry_group_id"
ERROR - 2021-10-13 21:42:22 --> Could not find the language line "entry_group_id"
ERROR - 2021-10-13 21:42:22 --> Could not find the language line "entry_groups[]"
ERROR - 2021-10-13 21:42:22 --> Could not find the language line "entry_groups[]"
ERROR - 2021-10-13 21:42:25 --> Could not find the language line "entry_group_id"
ERROR - 2021-10-13 21:42:25 --> Could not find the language line "entry_groups[]"
ERROR - 2021-10-13 21:42:25 --> Could not find the language line "entry_groups[]"
ERROR - 2021-10-13 21:42:48 --> Could not find the language line "entry_group_id"
ERROR - 2021-10-13 21:42:48 --> Could not find the language line "entry_groups[]"
ERROR - 2021-10-13 21:42:48 --> Could not find the language line "entry_groups[]"
ERROR - 2021-10-13 21:43:10 --> Could not find the language line "entry_group_id"
ERROR - 2021-10-13 21:43:10 --> Could not find the language line "entry_groups[]"
ERROR - 2021-10-13 21:43:10 --> Could not find the language line "entry_groups[]"
ERROR - 2021-10-13 21:44:43 --> Could not find the language line "entry_group_id"
ERROR - 2021-10-13 21:44:43 --> Could not find the language line "entry_groups[]"
ERROR - 2021-10-13 21:44:43 --> Could not find the language line "entry_groups[]"
ERROR - 2021-10-13 22:38:25 --> Could not find the language line "text_create_product"
ERROR - 2021-10-13 22:38:25 --> Could not find the language line "entry_ops_code"
ERROR - 2021-10-13 22:38:25 --> Could not find the language line "entry_ops_code"
ERROR - 2021-10-13 22:38:25 --> Could not find the language line "entry_name"
ERROR - 2021-10-13 22:38:25 --> Could not find the language line "entry_name"
ERROR - 2021-10-13 22:38:25 --> Could not find the language line "entry_description"
ERROR - 2021-10-13 22:38:25 --> Could not find the language line "entry_category_id"
ERROR - 2021-10-13 22:38:25 --> Could not find the language line "entry_category_id"
ERROR - 2021-10-13 22:38:25 --> Could not find the language line "entry_quantity"
ERROR - 2021-10-13 22:38:25 --> Could not find the language line "entry_quantity"
ERROR - 2021-10-13 22:38:25 --> Could not find the language line "entry_fresh"
ERROR - 2021-10-13 22:38:25 --> Severity: Notice --> Undefined variable: radio_values C:\laragon\www\teba\storage\framework\views\7913bea1596140150c7e6125fa83a83504c36f00.php 86
ERROR - 2021-10-13 22:38:25 --> Severity: Error --> Method Xiaoler\Blade\View::__toString() must not throw an exception, caught Error: Class 'Symfony\Component\Debug\Exception\FatalThrowableError' not found C:\laragon\www\teba\application\libraries\Blade.php 0
ERROR - 2021-10-13 22:39:26 --> Could not find the language line "text_create_product"
ERROR - 2021-10-13 22:39:26 --> Could not find the language line "entry_ops_code"
ERROR - 2021-10-13 22:39:26 --> Could not find the language line "entry_ops_code"
ERROR - 2021-10-13 22:39:26 --> Could not find the language line "entry_name"
ERROR - 2021-10-13 22:39:26 --> Could not find the language line "entry_name"
ERROR - 2021-10-13 22:39:26 --> Could not find the language line "entry_description"
ERROR - 2021-10-13 22:39:26 --> Could not find the language line "entry_category_id"
ERROR - 2021-10-13 22:39:26 --> Could not find the language line "entry_category_id"
ERROR - 2021-10-13 22:39:26 --> Could not find the language line "entry_quantity"
ERROR - 2021-10-13 22:39:26 --> Could not find the language line "entry_quantity"
ERROR - 2021-10-13 22:39:26 --> Could not find the language line "entry_fresh"
ERROR - 2021-10-13 22:39:26 --> Severity: Notice --> Undefined variable: radio_values C:\laragon\www\teba\storage\framework\views\7913bea1596140150c7e6125fa83a83504c36f00.php 86
ERROR - 2021-10-13 22:39:26 --> Severity: Error --> Method Xiaoler\Blade\View::__toString() must not throw an exception, caught Error: Class 'Symfony\Component\Debug\Exception\FatalThrowableError' not found C:\laragon\www\teba\application\libraries\Blade.php 0
ERROR - 2021-10-13 22:55:50 --> Severity: Notice --> Undefined property: stdClass::$groups C:\laragon\www\teba\storage\framework\views\ce0371becfdcfd02d8198a4f71c8a3ae14cfc8f6.php 25
ERROR - 2021-10-13 22:55:50 --> Severity: Notice --> Undefined property: stdClass::$groups C:\laragon\www\teba\storage\framework\views\ce0371becfdcfd02d8198a4f71c8a3ae14cfc8f6.php 25
ERROR - 2021-10-13 22:56:40 --> Severity: Notice --> Undefined property: stdClass::$groups C:\laragon\www\teba\storage\framework\views\ce0371becfdcfd02d8198a4f71c8a3ae14cfc8f6.php 25
ERROR - 2021-10-13 22:56:40 --> Severity: Notice --> Undefined property: stdClass::$groups C:\laragon\www\teba\storage\framework\views\ce0371becfdcfd02d8198a4f71c8a3ae14cfc8f6.php 25
ERROR - 2021-10-13 22:57:34 --> Severity: Notice --> Undefined property: stdClass::$groups C:\laragon\www\teba\storage\framework\views\ce0371becfdcfd02d8198a4f71c8a3ae14cfc8f6.php 25
ERROR - 2021-10-13 22:57:34 --> Severity: Notice --> Undefined property: stdClass::$groups C:\laragon\www\teba\storage\framework\views\ce0371becfdcfd02d8198a4f71c8a3ae14cfc8f6.php 25
ERROR - 2021-10-13 22:59:44 --> Severity: Warning --> htmlentities() expects parameter 1 to be string, object given C:\laragon\www\teba\vendor\xiaoler\blade\src\helpers.php 12
ERROR - 2021-10-13 22:59:44 --> Severity: Notice --> Undefined property: stdClass::$groups C:\laragon\www\teba\storage\framework\views\ce0371becfdcfd02d8198a4f71c8a3ae14cfc8f6.php 27
ERROR - 2021-10-13 22:59:44 --> Severity: Warning --> htmlentities() expects parameter 1 to be string, object given C:\laragon\www\teba\vendor\xiaoler\blade\src\helpers.php 12
ERROR - 2021-10-13 22:59:44 --> Severity: Notice --> Undefined property: stdClass::$groups C:\laragon\www\teba\storage\framework\views\ce0371becfdcfd02d8198a4f71c8a3ae14cfc8f6.php 27
