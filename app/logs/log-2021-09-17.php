<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-09-17 08:26:31 --> 404 Page Not Found: 
ERROR - 2021-09-17 08:31:24 --> Severity: Notice --> Undefined property: MyCliController::$_table_name C:\laragon\www\teba\vendor\codeigniter\framework\system\libraries\Migration.php 474
ERROR - 2021-09-17 08:31:24 --> Severity: Notice --> Undefined property: MyCliController::$_table_name C:\laragon\www\teba\vendor\codeigniter\framework\system\libraries\Migration.php 474
ERROR - 2021-09-17 08:31:25 --> Query error: Table 'teba.ci_users_groups' doesn't exist - Invalid query: INSERT INTO `ci_users_groups` (`user_id`, `group_id`) VALUES ('1', '1')
ERROR - 2021-09-17 08:32:12 --> Severity: Notice --> Undefined property: MyCliController::$_table_name C:\laragon\www\teba\vendor\codeigniter\framework\system\libraries\Migration.php 474
ERROR - 2021-09-17 08:32:12 --> Severity: Notice --> Undefined property: MyCliController::$_table_name C:\laragon\www\teba\vendor\codeigniter\framework\system\libraries\Migration.php 474
ERROR - 2021-09-17 08:32:12 --> Severity: Notice --> Undefined property: MyCliController::$_table_name C:\laragon\www\teba\vendor\codeigniter\framework\system\libraries\Migration.php 474
ERROR - 2021-09-17 08:32:12 --> Severity: Notice --> Undefined property: MyCliController::$_table_name C:\laragon\www\teba\vendor\codeigniter\framework\system\libraries\Migration.php 474
ERROR - 2021-09-17 08:34:01 --> Severity: Notice --> Undefined property: MyCliController::$_table_name C:\laragon\www\teba\vendor\codeigniter\framework\system\libraries\Migration.php 474
ERROR - 2021-09-17 08:34:01 --> Severity: Notice --> Undefined property: MyCliController::$_table_name C:\laragon\www\teba\vendor\codeigniter\framework\system\libraries\Migration.php 474
ERROR - 2021-09-17 09:00:45 --> Query error: Cannot add foreign key constraint - Invalid query: CREATE TABLE IF NOT EXISTS `ci_group_permission` (
	`id` INT AUTO_INCREMENT,
	`permission_id` INTEGER NULL DEFAULT NULL,
	`group_id` INTEGER NULL DEFAULT NULL,
	`date_added` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`date_modified` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT `pk_ci_group_permission` PRIMARY KEY(`id`), 
	CONSTRAINT FOREIGN KEY `fk_permissions_permission_id` (`permission_id`)  REFERENCES permissions(`permission_id`) ON DELETE SET NULL ON UPDATE CASCADE , 
	CONSTRAINT FOREIGN KEY `fk1_groups_id` (`group_id`)  REFERENCES groups(`id`) ON DELETE SET NULL ON UPDATE CASCADE 
);
ERROR - 2021-09-17 09:03:33 --> Query error: Cannot add foreign key constraint - Invalid query: CREATE TABLE IF NOT EXISTS `ci_group_permission` (
	`id` INT AUTO_INCREMENT,
	`permission_id` INTEGER NULL DEFAULT NULL,
	`group_id` INTEGER NULL DEFAULT NULL,
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT `pk_ci_group_permission` PRIMARY KEY(`id`), 
	CONSTRAINT FOREIGN KEY `fk_permissions_permission_id` (`permission_id`)  REFERENCES permissions(`permission_id`) ON DELETE SET NULL ON UPDATE CASCADE , 
	CONSTRAINT FOREIGN KEY `fk1_groups_id` (`group_id`)  REFERENCES groups(`id`) ON DELETE SET NULL ON UPDATE CASCADE 
);
ERROR - 2021-09-17 09:06:33 --> Query error: Cannot add foreign key constraint - Invalid query: CREATE TABLE IF NOT EXISTS `ci_group_permission` (
	`id` INT AUTO_INCREMENT,
	`permission_id` INTEGER NULL DEFAULT NULL,
	`group_id` INTEGER NULL DEFAULT NULL,
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT `pk_ci_group_permission` PRIMARY KEY(`id`), 
	CONSTRAINT FOREIGN KEY `fk_ci_permissions_permission_id` (`permission_id`)  REFERENCES ci_permissions(`permission_id`) ON DELETE SET NULL ON UPDATE CASCADE , 
	CONSTRAINT FOREIGN KEY `fk1_ci_groups_id` (`group_id`)  REFERENCES ci_groups(`id`) ON DELETE SET NULL ON UPDATE CASCADE 
);
ERROR - 2021-09-17 09:06:38 --> Query error: Cannot add foreign key constraint - Invalid query: CREATE TABLE IF NOT EXISTS `ci_group_permission` (
	`id` INT AUTO_INCREMENT,
	`permission_id` INTEGER NULL DEFAULT NULL,
	`group_id` INTEGER NULL DEFAULT NULL,
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT `pk_ci_group_permission` PRIMARY KEY(`id`), 
	CONSTRAINT FOREIGN KEY `fk_ci_permissions_permission_id` (`permission_id`)  REFERENCES ci_permissions(`permission_id`) ON DELETE SET NULL ON UPDATE CASCADE , 
	CONSTRAINT FOREIGN KEY `fk1_ci_groups_id` (`group_id`)  REFERENCES ci_groups(`id`) ON DELETE SET NULL ON UPDATE CASCADE 
);
ERROR - 2021-09-17 09:14:04 --> Query error: Cannot add foreign key constraint - Invalid query: CREATE TABLE IF NOT EXISTS `ci_group_permission` (
	`id` INT AUTO_INCREMENT,
	`permission_id` INTEGER NULL DEFAULT NULL,
	`group_id` INTEGER NULL DEFAULT NULL,
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT `pk_ci_group_permission` PRIMARY KEY(`id`), 
	CONSTRAINT FOREIGN KEY `fk_permissions_permission_id` (`permission_id`)  REFERENCES permissions(`permission_id`) ON DELETE SET NULL ON UPDATE CASCADE 
);
ERROR - 2021-09-17 09:14:59 --> Query error: Cannot add foreign key constraint - Invalid query: CREATE TABLE IF NOT EXISTS `ci_group_permission` (
	`id` INT AUTO_INCREMENT,
	`permission_id` INTEGER NULL DEFAULT NULL,
	`group_id` INTEGER NULL DEFAULT NULL,
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT `pk_ci_group_permission` PRIMARY KEY(`id`), 
	CONSTRAINT FOREIGN KEY `fk_permissions_id` (`permission_id`)  REFERENCES permissions(`id`) ON DELETE SET NULL ON UPDATE CASCADE 
);
ERROR - 2021-09-17 09:16:25 --> Query error: Cannot add foreign key constraint - Invalid query: CREATE TABLE IF NOT EXISTS `ci_group_permission` (
	`id` INT AUTO_INCREMENT,
	`permission_id` INTEGER NULL DEFAULT NULL,
	`group_id` INTEGER NULL DEFAULT NULL,
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT `pk_ci_group_permission` PRIMARY KEY(`id`), 
	CONSTRAINT FOREIGN KEY `fk_permissions_id` (`permission_id`)  REFERENCES permissions(`id`) ON DELETE NO ACTION ON UPDATE NO ACTION 
);
ERROR - 2021-09-17 09:20:50 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `ci_permissions`
ERROR - 2021-09-17 09:21:05 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `ci_permissions`
ERROR - 2021-09-17 09:21:20 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `ci_permissions`
ERROR - 2021-09-17 09:21:57 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `ci_permissions`
ERROR - 2021-09-17 09:22:14 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `ci_permissions`
ERROR - 2021-09-17 09:22:23 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `ci_permissions`
ERROR - 2021-09-17 09:22:42 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `ci_permissions`
ERROR - 2021-09-17 09:25:04 --> Query error: Table 'teba.ci_users_groups' doesn't exist - Invalid query: INSERT INTO `ci_users_groups` (`user_id`, `group_id`) VALUES ('1', '1')
ERROR - 2021-09-17 09:28:00 --> Severity: Notice --> Undefined index: HTTP_HOST C:\laragon\www\teba\application\database\seeds\UserSeeder.php 13
ERROR - 2021-09-17 09:31:48 --> Severity: Warning --> preg_replace(): Unknown modifier '|' C:\laragon\www\teba\application\database\seeds\UserSeeder.php 13
ERROR - 2021-09-17 09:37:40 --> Severity: Notice --> Array to string conversion C:\laragon\www\teba\application\database\seeds\UserSeeder.php 13
ERROR - 2021-09-17 09:38:40 --> 404 Page Not Found: 
ERROR - 2021-09-17 11:17:40 --> Query error: Cannot add foreign key constraint - Invalid query: CREATE TABLE IF NOT EXISTS `ci_group_permission` (
	`id` BIGINT AUTO_INCREMENT,
	`permission_id` INTEGER NULL DEFAULT NULL,
	`group_id` INTEGER NULL DEFAULT NULL,
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT `pk_ci_group_permission` PRIMARY KEY(`id`), 
	CONSTRAINT FOREIGN KEY `fk_permissions_id` (`permission_id`)  REFERENCES ci_permissions(`id`) ON DELETE SET NULL ON UPDATE CASCADE , 
	CONSTRAINT FOREIGN KEY `fk1_groups_id` (`group_id`)  REFERENCES ci_groups(`id`) ON DELETE SET NULL ON UPDATE CASCADE 
);
