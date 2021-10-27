<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-09-20 05:59:59 --> 404 Page Not Found: 
ERROR - 2021-09-20 06:04:24 --> Query error: Invalid default value for 'installment_payment_rule' - Invalid query: CREATE TABLE IF NOT EXISTS `ci_financials` (
	`id` BIGINT AUTO_INCREMENT,
	`rate` DECIMAL(15,4) NOT NULL DEFAULT 0,
	`installment_payment_rule` ENUM("ΕΝΑΡΞΗ ΕΡΓΟΥ","ΥΠΟΓΡΑΦΗ ΣΥΜΒΑΣΗΣ","ΠΟΣΟΣΤΟ ΑΠΟΡΡΟΦΗΣΗΣ") NOT NULL DEFAULT 'ΕΝΑΡΞΗ ΕΡΓΟΥ',
	`installment_rate` DECIMAL(15,4) NOT NULL DEFAULT 0,
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT `pk_ci_financials` PRIMARY KEY(`id`)
);
ERROR - 2021-09-20 06:17:01 --> Query error: Invalid default value for 'installment_payment_rule' - Invalid query: CREATE TABLE IF NOT EXISTS `ci_financials` (
	`id` BIGINT AUTO_INCREMENT,
	`rate` DECIMAL(15,4) NOT NULL DEFAULT 0,
	`installment_payment_rule` ENUM("ΕΝΑΡΞΗ ΕΡΓΟΥ","ΥΠΟΓΡΑΦΗ ΣΥΜΒΑΣΗΣ","ΠΟΣΟΣΤΟ ΑΠΟΡΡΟΦΗΣΗΣ") NOT NULL DEFAULT 'ΕΝΑΡΞΗ ΕΡΓΟΥ',
	`installment_rate` DECIMAL(15,4) NOT NULL DEFAULT 0,
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT `pk_ci_financials` PRIMARY KEY(`id`)
);
ERROR - 2021-09-20 06:44:16 --> Not Found: 
ERROR - 2021-09-20 10:18:22 --> Severity: error --> Exception: Class 'app\services\TestService' not found C:\laragon\www\teba\application\controllers\WelcomeController.php 25
ERROR - 2021-09-20 10:18:23 --> 404 Page Not Found: 
ERROR - 2021-09-20 10:18:37 --> Severity: error --> Exception: Class 'app\services\TestService' not found C:\laragon\www\teba\application\controllers\WelcomeController.php 25
ERROR - 2021-09-20 10:18:39 --> Severity: error --> Exception: Class 'app\services\TestService' not found C:\laragon\www\teba\application\controllers\WelcomeController.php 25
ERROR - 2021-09-20 10:37:05 --> 404 Page Not Found: 
ERROR - 2021-09-20 10:39:22 --> Severity: error --> Exception: Class 'App\services\TestService' not found C:\laragon\www\teba\application\controllers\WelcomeController.php 26
ERROR - 2021-09-20 10:39:43 --> Severity: error --> Exception: syntax error, unexpected 'run' (T_STRING), expecting variable (T_VARIABLE) or '$' C:\laragon\www\teba\application\controllers\WelcomeController.php 26
ERROR - 2021-09-20 10:40:20 --> Severity: error --> Exception: syntax error, unexpected 'run' (T_STRING), expecting variable (T_VARIABLE) or '$' C:\laragon\www\teba\application\controllers\WelcomeController.php 26
ERROR - 2021-09-20 10:40:31 --> Severity: error --> Exception: Class 'App\services\TestService' not found C:\laragon\www\teba\application\controllers\WelcomeController.php 26
ERROR - 2021-09-20 10:57:31 --> 404 Page Not Found: 
ERROR - 2021-09-20 10:57:34 --> 404 Page Not Found: 
ERROR - 2021-09-20 10:59:42 --> 404 Page Not Found: 
ERROR - 2021-09-20 11:00:07 --> 404 Page Not Found: 
ERROR - 2021-09-20 11:01:06 --> 404 Page Not Found: 
ERROR - 2021-09-20 11:01:30 --> 404 Page Not Found: 
ERROR - 2021-09-20 11:01:37 --> 404 Page Not Found: 
ERROR - 2021-09-20 11:01:46 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 11:02:02 --> 404 Page Not Found: 
ERROR - 2021-09-20 11:02:06 --> 404 Page Not Found: 
ERROR - 2021-09-20 11:02:09 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 11:02:11 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 11:02:58 --> 404 Page Not Found: AuthController/index
ERROR - 2021-09-20 11:03:04 --> 404 Page Not Found: AuthController/index
ERROR - 2021-09-20 11:03:47 --> 404 Page Not Found: AuthController/index
ERROR - 2021-09-20 11:04:29 --> 404 Page Not Found: AuthController/index
ERROR - 2021-09-20 11:13:38 --> 404 Page Not Found: AuthController/index
ERROR - 2021-09-20 11:14:43 --> 404 Page Not Found: AuthController/index
ERROR - 2021-09-20 11:14:56 --> 404 Page Not Found: AuthController/index
ERROR - 2021-09-20 11:15:32 --> 404 Page Not Found: Auth\AuthController/index
ERROR - 2021-09-20 11:16:13 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 11:17:16 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 11:17:39 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 11:17:49 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 11:21:19 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 11:22:08 --> Severity: Notice --> Undefined property: AuthController::$ion_auth C:\laragon\www\teba\application\controllers\auth\AuthController.php 13
ERROR - 2021-09-20 11:22:08 --> Severity: error --> Exception: Call to a member function logged_in() on null C:\laragon\www\teba\application\controllers\auth\AuthController.php 13
ERROR - 2021-09-20 11:22:31 --> Severity: Notice --> Undefined property: AuthController::$ion_auth C:\laragon\www\teba\application\controllers\auth\AuthController.php 13
ERROR - 2021-09-20 11:22:32 --> Severity: error --> Exception: Call to a member function logged_in() on null C:\laragon\www\teba\application\controllers\auth\AuthController.php 13
ERROR - 2021-09-20 11:22:52 --> Severity: error --> Exception: View [admin.auth.login] not found. C:\laragon\www\teba\vendor\xiaoler\blade\src\FileViewFinder.php 137
ERROR - 2021-09-20 11:23:57 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 11:24:10 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 11:24:24 --> Severity: 8192 --> Cannot use "parent" when current class scope has no parent C:\laragon\www\teba\application\controllers\auth\AuthController.php 8
ERROR - 2021-09-20 11:24:24 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 11:24:58 --> Severity: error --> Exception: Class 'app\core\MY_Controller' not found C:\laragon\www\teba\application\controllers\auth\AuthController.php 7
ERROR - 2021-09-20 11:26:32 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 11:27:55 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 11:27:56 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 11:28:11 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 11:28:17 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 11:42:23 --> Severity: error --> Exception: Class 'App\core\MY_Controller' not found C:\laragon\www\teba\application\controllers\auth\AuthController.php 7
ERROR - 2021-09-20 11:42:34 --> Severity: error --> Exception: Class 'App\controllers\auth\MY_Controller' not found C:\laragon\www\teba\application\controllers\auth\AuthController.php 7
ERROR - 2021-09-20 11:43:34 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 17:40:27 --> Severity: error --> Exception: Class 'App\core\BaseController' not found C:\laragon\www\teba\application\core\MY_Controller.php 5
ERROR - 2021-09-20 17:42:16 --> Severity: error --> Exception: Class 'App\core\BaseController' not found C:\laragon\www\teba\application\core\MY_Controller.php 7
ERROR - 2021-09-20 17:42:46 --> Severity: error --> Exception: Class 'App\core\BaseController' not found C:\laragon\www\teba\application\core\MY_Controller.php 5
ERROR - 2021-09-20 17:42:48 --> Severity: error --> Exception: Class 'App\core\BaseController' not found C:\laragon\www\teba\application\core\MY_Controller.php 5
ERROR - 2021-09-20 17:42:48 --> Severity: error --> Exception: Class 'App\core\BaseController' not found C:\laragon\www\teba\application\core\MY_Controller.php 5
ERROR - 2021-09-20 17:48:19 --> Severity: error --> Exception: Class 'App\core\BaseController' not found C:\laragon\www\teba\application\core\MY_Controller.php 5
ERROR - 2021-09-20 17:49:15 --> Severity: error --> Exception: Class 'App\controllers\BasedController' not found C:\laragon\www\teba\application\core\MY_Controller.php 7
ERROR - 2021-09-20 17:49:30 --> Severity: error --> Exception: Class 'App\controllers\BasedController' not found C:\laragon\www\teba\application\core\MY_Controller.php 7
ERROR - 2021-09-20 17:49:48 --> Severity: error --> Exception: Class 'App\core\CI_Controller' not found C:\laragon\www\teba\application\core\MY_Controller.php 7
ERROR - 2021-09-20 17:50:02 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 17:50:27 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 17:50:36 --> Severity: 8192 --> Cannot use "parent" when current class scope has no parent C:\laragon\www\teba\application\core\MY_Controller.php 12
ERROR - 2021-09-20 17:50:36 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 17:50:45 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 17:50:52 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 17:51:20 --> Severity: Warning --> Use of undefined constant CI_Controller - assumed 'CI_Controller' (this will throw an Error in a future version of PHP) C:\laragon\www\teba\application\core\MY_Controller.php 7
ERROR - 2021-09-20 17:51:35 --> Severity: error --> Exception: Class 'App\controllers\BasedController' not found C:\laragon\www\teba\application\core\MY_Controller.php 7
ERROR - 2021-09-20 17:51:44 --> Severity: Warning --> Use of undefined constant CI_Controller - assumed 'CI_Controller' (this will throw an Error in a future version of PHP) C:\laragon\www\teba\application\core\MY_Controller.php 7
ERROR - 2021-09-20 17:52:02 --> Severity: Warning --> Use of undefined constant CI_Controller - assumed 'CI_Controller' (this will throw an Error in a future version of PHP) C:\laragon\www\teba\application\core\MY_Controller.php 7
ERROR - 2021-09-20 17:52:09 --> Severity: error --> Exception: Undefined constant 'CI_Controller' C:\laragon\www\teba\application\core\MY_Controller.php 7
ERROR - 2021-09-20 17:52:17 --> Severity: Warning --> Use of undefined constant CI_Controller - assumed 'CI_Controller' (this will throw an Error in a future version of PHP) C:\laragon\www\teba\application\core\MY_Controller.php 7
ERROR - 2021-09-20 17:52:28 --> Severity: error --> Exception: Class 'App\core\CI_Controller' not found C:\laragon\www\teba\application\core\MY_Controller.php 7
ERROR - 2021-09-20 17:52:37 --> 404 Page Not Found: auth/AuthController/index
ERROR - 2021-09-20 17:58:22 --> Severity: error --> Exception: Class 'App\core\MY_Controller' not found C:\laragon\www\teba\application\controllers\auth\AuthController.php 7
ERROR - 2021-09-20 18:25:28 --> Severity: error --> Exception: View [admin.auth.login] not found. C:\laragon\www\teba\vendor\xiaoler\blade\src\FileViewFinder.php 137
ERROR - 2021-09-20 18:25:28 --> Severity: Warning --> include(C:\laragon\www\teba\resources\views\errors\html\error_exception.php): failed to open stream: No such file or directory C:\laragon\www\teba\vendor\codeigniter\framework\system\core\Exceptions.php 219
ERROR - 2021-09-20 18:25:28 --> Severity: Warning --> include(): Failed opening 'C:\laragon\www\teba\resources\views\errors\html\error_exception.php' for inclusion (include_path='.;C:/laragon/etc/php/pear') C:\laragon\www\teba\vendor\codeigniter\framework\system\core\Exceptions.php 219
ERROR - 2021-09-20 18:26:42 --> Severity: error --> Exception: View [public.welcome] not found. C:\laragon\www\teba\vendor\xiaoler\blade\src\FileViewFinder.php 137
ERROR - 2021-09-20 18:27:54 --> Severity: error --> Exception: View [public.welcome] not found. C:\laragon\www\teba\vendor\xiaoler\blade\src\FileViewFinder.php 137
ERROR - 2021-09-20 18:28:00 --> Severity: error --> Exception: View [public.welcome] not found. C:\laragon\www\teba\vendor\xiaoler\blade\src\FileViewFinder.php 137
ERROR - 2021-09-20 18:29:07 --> Severity: error --> Exception: View [public.welcome] not found. C:\laragon\www\teba\vendor\xiaoler\blade\src\FileViewFinder.php 137
ERROR - 2021-09-20 18:29:15 --> Severity: error --> Exception: View [public.welcome] not found. C:\laragon\www\teba\vendor\xiaoler\blade\src\FileViewFinder.php 137
ERROR - 2021-09-20 18:29:34 --> Severity: error --> Exception: View [public.welcome] not found. C:\laragon\www\teba\vendor\xiaoler\blade\src\FileViewFinder.php 137
ERROR - 2021-09-20 18:30:03 --> Severity: error --> Exception: View [public.welcome] not found. C:\laragon\www\teba\vendor\xiaoler\blade\src\FileViewFinder.php 137
ERROR - 2021-09-20 18:30:32 --> Severity: error --> Exception: View [public.welcome] not found. C:\laragon\www\teba\vendor\xiaoler\blade\src\FileViewFinder.php 137
ERROR - 2021-09-20 18:32:19 --> Severity: error --> Exception: View [admin.auth.login] not found. C:\laragon\www\teba\vendor\xiaoler\blade\src\FileViewFinder.php 137
ERROR - 2021-09-20 18:32:20 --> Severity: Warning --> include(C:\laragon\www\teba\application\\errors\html\error_exception.php): failed to open stream: No such file or directory C:\laragon\www\teba\vendor\codeigniter\framework\system\core\Exceptions.php 219
ERROR - 2021-09-20 18:32:20 --> Severity: Warning --> include(): Failed opening 'C:\laragon\www\teba\application\\errors\html\error_exception.php' for inclusion (include_path='.;C:/laragon/etc/php/pear') C:\laragon\www\teba\vendor\codeigniter\framework\system\core\Exceptions.php 219
ERROR - 2021-09-20 18:32:56 --> Severity: error --> Exception: View [admin.auth.login] not found. C:\laragon\www\teba\vendor\xiaoler\blade\src\FileViewFinder.php 137
ERROR - 2021-09-20 18:33:06 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\teba\application\third_party\codeigniter-debugbar\libraries\Profiler.php 118
ERROR - 2021-09-20 18:33:06 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\teba\application\third_party\codeigniter-debugbar\libraries\Profiler.php 146
ERROR - 2021-09-20 18:33:06 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\teba\application\third_party\codeigniter-debugbar\libraries\Profiler.php 361
ERROR - 2021-09-20 18:33:06 --> Severity: error --> Exception:  C:\laragon\www\teba\vendor\luthier\luthier\src\RouteBuilder.php 391
ERROR - 2021-09-20 18:33:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\laragon\www\teba\vendor\codeigniter\framework\system\core\Exceptions.php:271) C:\laragon\www\teba\vendor\codeigniter\framework\system\core\Common.php 570
ERROR - 2021-09-20 18:33:22 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\teba\application\third_party\codeigniter-debugbar\libraries\Profiler.php 118
ERROR - 2021-09-20 18:33:22 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\teba\application\third_party\codeigniter-debugbar\libraries\Profiler.php 146
ERROR - 2021-09-20 18:33:22 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\teba\application\third_party\codeigniter-debugbar\libraries\Profiler.php 361
ERROR - 2021-09-20 18:33:22 --> Severity: error --> Exception:  C:\laragon\www\teba\vendor\luthier\luthier\src\RouteBuilder.php 391
ERROR - 2021-09-20 18:33:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\laragon\www\teba\vendor\codeigniter\framework\system\core\Exceptions.php:271) C:\laragon\www\teba\vendor\codeigniter\framework\system\core\Common.php 570
ERROR - 2021-09-20 18:37:12 --> 404 Page Not Found: 
ERROR - 2021-09-20 18:37:12 --> 404 Page Not Found: 
ERROR - 2021-09-20 18:37:12 --> 404 Page Not Found: 
ERROR - 2021-09-20 18:37:12 --> 404 Page Not Found: 
ERROR - 2021-09-20 18:37:12 --> 404 Page Not Found: 
ERROR - 2021-09-20 18:37:12 --> 404 Page Not Found: 
ERROR - 2021-09-20 18:37:12 --> 404 Page Not Found: 
ERROR - 2021-09-20 18:37:12 --> 404 Page Not Found: 
ERROR - 2021-09-20 18:37:12 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:04 --> Severity: error --> Exception: Class 'Symfony\Component\Debug\Exception\FatalThrowableError' not found C:\laragon\www\teba\vendor\xiaoler\blade\src\Engines\PhpEngine.php 46
ERROR - 2021-09-20 20:43:05 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:05 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:05 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:05 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:05 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:05 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:17 --> Severity: error --> Exception: Class 'Symfony\Component\Debug\Exception\FatalThrowableError' not found C:\laragon\www\teba\vendor\xiaoler\blade\src\Engines\PhpEngine.php 46
ERROR - 2021-09-20 20:43:17 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:17 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:17 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:17 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:17 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:17 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:19 --> Severity: error --> Exception: Class 'Symfony\Component\Debug\Exception\FatalThrowableError' not found C:\laragon\www\teba\vendor\xiaoler\blade\src\Engines\PhpEngine.php 46
ERROR - 2021-09-20 20:43:19 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:19 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:19 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:19 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:19 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:43:19 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:09 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:09 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:09 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:09 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:09 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:09 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:09 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:09 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:09 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:09 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:41 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:41 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:41 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:41 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:41 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:41 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:41 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:41 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:41 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:41 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:41 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:42 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:44:42 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:53:52 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:53:52 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:53:52 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:53:52 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:53:52 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:53:52 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:53:52 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:53:52 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:53:52 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:53:52 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:53:52 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:53:53 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:29 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:30 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:30 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:30 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:30 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:30 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:30 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:30 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:30 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:30 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:30 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:30 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:30 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:34 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:34 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:34 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:34 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:34 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:34 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:34 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:34 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:34 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:34 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:34 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:55:34 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:18 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:21 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:21 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:21 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:21 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:21 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:21 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:21 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:21 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:23 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:23 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:23 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:23 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:23 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:23 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:23 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:23 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:23 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:56:23 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:44 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:44 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:44 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:44 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:44 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:44 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:44 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:44 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:44 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:44 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:44 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:44 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:54 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:54 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:54 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:54 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:54 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:54 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:54 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:54 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:54 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:54 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:54 --> 404 Page Not Found: 
ERROR - 2021-09-20 20:57:54 --> 404 Page Not Found: 
