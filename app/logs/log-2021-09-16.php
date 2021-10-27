<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-09-16 07:30:37 --> 404 Page Not Found: 
ERROR - 2021-09-16 04:37:25 --> Severity: Warning --> trim() expects parameter 1 to be string, array given C:\laragon\www\teba\vendor\luthier\luthier\src\Route.php 149
ERROR - 2021-09-16 04:37:25 --> Not Found: MyCliController/makeMigration
ERROR - 2021-09-16 04:37:48 --> Severity: Warning --> trim() expects parameter 1 to be string, array given C:\laragon\www\teba\vendor\luthier\luthier\src\Route.php 149
ERROR - 2021-09-16 04:37:48 --> Not Found: MyCliController/makeMigration
ERROR - 2021-09-16 04:39:16 --> Not Found: MyCliController/makeMigration
ERROR - 2021-09-16 05:05:33 --> Severity: Warning --> trim() expects parameter 1 to be string, array given C:\laragon\www\teba\vendor\luthier\luthier\src\Route.php 149
ERROR - 2021-09-16 05:05:33 --> Severity: Warning --> trim() expects parameter 1 to be string, array given C:\laragon\www\teba\vendor\luthier\luthier\src\Route.php 149
ERROR - 2021-09-16 05:05:34 --> Not Found: MyCliController/makeMigration
ERROR - 2021-09-16 05:36:47 --> Severity: Notice --> Undefined property: GroupSeeder::$db C:\laragon\www\teba\application\database\seeds\GroupSeeder.php 14
ERROR - 2021-09-16 05:36:47 --> Severity: error --> Exception: Call to a member function insert() on null C:\laragon\www\teba\application\database\seeds\GroupSeeder.php 14
ERROR - 2021-09-16 05:44:22 --> Severity: Compile Error --> Constant expression contains invalid operations C:\laragon\www\teba\application\database\seeds\GroupSeeder.php 5
ERROR - 2021-09-16 05:49:32 --> Severity: Compile Error --> Constant expression contains invalid operations C:\laragon\www\teba\application\database\seeds\GroupSeeder.php 5
ERROR - 2021-09-16 05:53:01 --> Severity: Compile Error --> Constant expression contains invalid operations C:\laragon\www\teba\application\database\seeds\GroupSeeder.php 5
ERROR - 2021-09-16 05:54:22 --> Severity: error --> Exception: Class 'GroupSeeder' not found C:\laragon\www\teba\application\libraries\Seeder.php 40
ERROR - 2021-09-16 05:54:37 --> Severity: Notice --> Undefined property: GroupSeeder::$db C:\laragon\www\teba\application\database\seeds\GroupSeeder.php 14
ERROR - 2021-09-16 05:54:37 --> Severity: error --> Exception: Call to a member function insert() on null C:\laragon\www\teba\application\database\seeds\GroupSeeder.php 14
ERROR - 2021-09-16 05:56:05 --> Query error: Duplicate entry '1' for key 'PRIMARY' - Invalid query: INSERT INTO `ci_groups` (`id`, `name`, `description`) VALUES (1, 'admin', 'Administrator')
ERROR - 2021-09-16 06:23:18 --> Severity: error --> Exception: Too few arguments to function Luthier\Hook::{closure}(), 0 passed and exactly 1 expected C:\laragon\www\teba\application\routes\cli.php 25
ERROR - 2021-09-16 06:26:04 --> Severity: Warning --> require_once(C:\laragon\www\teba\application\database/seeds/test.php): failed to open stream: No such file or directory C:\laragon\www\teba\application\libraries\Seeder.php 37
ERROR - 2021-09-16 06:26:04 --> Severity: Compile Error --> require_once(): Failed opening required 'C:\laragon\www\teba\application\database/seeds/test.php' (include_path='.;C:/laragon/etc/php/pear') C:\laragon\www\teba\application\libraries\Seeder.php 37
ERROR - 2021-09-16 06:31:46 --> Query error: Table 'teba.ci_users' doesn't exist - Invalid query: INSERT INTO `ci_users` (`ip_address`, `username`, `password`, `email`, `activation_code`, `forgotten_password_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES ('127.0.0.1', 'administrator', '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa', 'admin@teba.io', '', NULL, '1268889823', '1268889823', '1', 'George', 'Tsachrelias', 'Silktech', '2610600785')
ERROR - 2021-09-16 06:33:06 --> Query error: Duplicate entry 'admin@teba.io' for key 'email' - Invalid query: INSERT INTO `ci_users` (`ip_address`, `username`, `password`, `email`, `activation_code`, `forgotten_password_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES ('127.0.0.1', 'administrator', '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa', 'admin@teba.io', '', NULL, '1268889823', '1268889823', '1', 'George', 'Tsachrelias', 'Silktech', '2610600785')
