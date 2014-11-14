<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-13 00:02:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''/js/jquery.validate.js'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/Controller/System/Base.php [ 66 ] in file:line
2014-11-13 00:02:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-13 10:06:19 --- EMERGENCY: Database_Exception [ 1045 ]: SQLSTATE[28000] [1045] Access denied for user 'kohana'@'localhost' (using password: YES) ~ APPPATH/classes/Kohana/Database/PDO.php [ 66 ] in /srv/http/test.local/www/application/classes/Kohana/Database/PDO.php:305
2014-11-13 10:06:19 --- DEBUG: #0 /srv/http/test.local/www/application/classes/Kohana/Database/PDO.php(305): Kohana_Database_PDO->connect()
#1 /srv/http/test.local/www/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('')
#2 /srv/http/test.local/www/modules/database/classes/Kohana/Database/Query/Builder/Insert.php(146): Kohana_Database->quote('')
#3 /srv/http/test.local/www/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Insert->compile(Object(Database_PDO))
#4 /srv/http/test.local/www/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_PDO))
#5 /srv/http/test.local/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#6 /srv/http/test.local/www/application/classes/Controller/Admin.php(36): Kohana_ORM->save()
#7 /srv/http/test.local/www/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addrealitv()
#8 [internal function]: Kohana_Controller->execute()
#9 /srv/http/test.local/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /srv/http/test.local/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /srv/http/test.local/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /srv/http/test.local/www/index.php(118): Kohana_Request->execute()
#13 {main} in /srv/http/test.local/www/application/classes/Kohana/Database/PDO.php:305
2014-11-13 10:33:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The n property does not exist in the Model_Realitive class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /srv/http/test.local/www/modules/orm/classes/Kohana/ORM.php:603
2014-11-13 10:33:25 --- DEBUG: #0 /srv/http/test.local/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('n')
#1 /srv/http/test.local/www/application/classes/Controller/Admin.php(40): Kohana_ORM->__get('n')
#2 /srv/http/test.local/www/system/classes/Kohana/Controller.php(84): Controller_Admin->action_addrealitv()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/http/test.local/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /srv/http/test.local/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/http/test.local/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/http/test.local/www/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/http/test.local/www/modules/orm/classes/Kohana/ORM.php:603
2014-11-13 11:00:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Controller/Admin.php [ 42 ] in /srv/http/test.local/www/application/classes/Controller/Admin.php:42
2014-11-13 11:00:56 --- DEBUG: #0 /srv/http/test.local/www/application/classes/Controller/Admin.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/http/test....', 42, Array)
#1 /srv/http/test.local/www/system/classes/Kohana/Controller.php(84): Controller_Admin->action_deleterealitv()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/http/test.local/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /srv/http/test.local/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/http/test.local/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /srv/http/test.local/www/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/http/test.local/www/application/classes/Controller/Admin.php:42
2014-11-13 11:01:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Controller/Admin.php [ 42 ] in /srv/http/test.local/www/application/classes/Controller/Admin.php:42
2014-11-13 11:01:16 --- DEBUG: #0 /srv/http/test.local/www/application/classes/Controller/Admin.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/http/test....', 42, Array)
#1 /srv/http/test.local/www/system/classes/Kohana/Controller.php(84): Controller_Admin->action_deleterealitv()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/http/test.local/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /srv/http/test.local/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/http/test.local/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /srv/http/test.local/www/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/http/test.local/www/application/classes/Controller/Admin.php:42
2014-11-13 14:42:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: radio ~ APPPATH\classes\Controller\Admin.php [ 21 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:21
2014-11-13 14:42:39 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 21, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addingus()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:21
2014-11-13 15:21:28 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, object given, called in C:\wamp\www\new\application\classes\Controller\Admin.php on line 74 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in C:\wamp\www\new\system\classes\Kohana\View.php:28
2014-11-13 15:21:28 --- DEBUG: #0 C:\wamp\www\new\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\\wamp\\www\\new...', 28, Array)
#1 C:\wamp\www\new\application\classes\Controller\Admin.php(74): Kohana_View::factory('pages/admin/reg...', Object(Database_Result_Cached))
#2 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_regusers()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\new\system\classes\Kohana\View.php:28
2014-11-13 16:42:31 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, object given, called in C:\wamp\www\new\application\classes\Controller\Admin.php on line 75 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in C:\wamp\www\new\system\classes\Kohana\View.php:28
2014-11-13 16:42:31 --- DEBUG: #0 C:\wamp\www\new\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\\wamp\\www\\new...', 28, Array)
#1 C:\wamp\www\new\application\classes\Controller\Admin.php(75): Kohana_View::factory('pages/admin/reg...', Object(Database_Result_Cached))
#2 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_regusers()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\new\system\classes\Kohana\View.php:28
2014-11-13 16:43:48 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\pages\admin\registeredusers.php [ 50 ] in C:\wamp\www\new\application\views\pages\admin\registeredusers.php:50
2014-11-13 16:43:48 --- DEBUG: #0 C:\wamp\www\new\application\views\pages\admin\registeredusers.php(50): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\wamp\\www\\new...', 50, Array)
#1 C:\wamp\www\new\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\new...')
#2 C:\wamp\www\new\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\new...', Array)
#3 C:\wamp\www\new\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\new\application\views\layouts\main.php(23): Kohana_View->__toString()
#5 C:\wamp\www\new\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\new...')
#6 C:\wamp\www\new\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\new...', Array)
#7 C:\wamp\www\new\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\new\application\classes\Controller\System\Base.php(78): Kohana_Controller_Template->after()
#9 C:\wamp\www\new\system\classes\Kohana\Controller.php(87): Controller_System_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\new\application\views\pages\admin\registeredusers.php:50
2014-11-13 16:44:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: address ~ APPPATH\views\pages\admin\registeredusers.php [ 50 ] in C:\wamp\www\new\application\views\pages\admin\registeredusers.php:50
2014-11-13 16:44:33 --- DEBUG: #0 C:\wamp\www\new\application\views\pages\admin\registeredusers.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 50, Array)
#1 C:\wamp\www\new\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\new...')
#2 C:\wamp\www\new\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\new...', Array)
#3 C:\wamp\www\new\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\new\application\views\layouts\main.php(23): Kohana_View->__toString()
#5 C:\wamp\www\new\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\new...')
#6 C:\wamp\www\new\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\new...', Array)
#7 C:\wamp\www\new\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\new\application\classes\Controller\System\Base.php(78): Kohana_Controller_Template->after()
#9 C:\wamp\www\new\system\classes\Kohana\Controller.php(87): Controller_System_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\new\application\views\pages\admin\registeredusers.php:50
2014-11-13 16:51:20 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'email,login,f,i,o,role from teacher)
                Order by f' at line 3 [ (Select id,email,login,f,i,o,role from pupil)
                UNION
                (Select id,,email,login,f,i,o,role from teacher)
                Order by f
                 ] ~ APPPATH\classes\Kohana\Database\PDO.php [ 158 ] in C:\wamp\www\new\modules\database\classes\Kohana\Database\Query.php:251
2014-11-13 16:51:20 --- DEBUG: #0 C:\wamp\www\new\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '(Select id,emai...', false, Array)
#1 C:\wamp\www\new\application\classes\Controller\Admin.php(74): Kohana_Database_Query->execute()
#2 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_regusers()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\new\modules\database\classes\Kohana\Database\Query.php:251
2014-11-13 16:51:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Admin.php [ 33 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:33
2014-11-13 16:51:47 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 33, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addrealitv()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:33
2014-11-13 16:52:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Admin.php [ 33 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:33
2014-11-13 16:52:22 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 33, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addrealitv()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:33
2014-11-13 16:53:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Admin.php [ 31 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:31
2014-11-13 16:53:08 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 31, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addrealitv()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:31
2014-11-13 17:36:43 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'email,login,f,i,o,role from teacher)
                Order by f' at line 3 [ (Select id,email,login,f,i,o,role from pupil)
                UNION
                (Select id,,email,login,f,i,o,role from teacher)
                Order by f
                 ] ~ APPPATH\classes\Kohana\Database\PDO.php [ 158 ] in C:\wamp\www\new\modules\database\classes\Kohana\Database\Query.php:251
2014-11-13 17:36:43 --- DEBUG: #0 C:\wamp\www\new\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, '(Select id,emai...', false, Array)
#1 C:\wamp\www\new\application\classes\Controller\Admin.php(77): Kohana_Database_Query->execute()
#2 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_regusers()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\new\modules\database\classes\Kohana\Database\Query.php:251
2014-11-13 17:37:41 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\pages\admin\registeredusers.php [ 55 ] in C:\wamp\www\new\application\views\pages\admin\registeredusers.php:55
2014-11-13 17:37:41 --- DEBUG: #0 C:\wamp\www\new\application\views\pages\admin\registeredusers.php(55): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\wamp\\www\\new...', 55, Array)
#1 C:\wamp\www\new\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\new...')
#2 C:\wamp\www\new\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\new...', Array)
#3 C:\wamp\www\new\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\new\application\views\layouts\main.php(23): Kohana_View->__toString()
#5 C:\wamp\www\new\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\new...')
#6 C:\wamp\www\new\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\new...', Array)
#7 C:\wamp\www\new\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\new\application\classes\Controller\System\Base.php(78): Kohana_Controller_Template->after()
#9 C:\wamp\www\new\system\classes\Kohana\Controller.php(87): Controller_System_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\new\application\views\pages\admin\registeredusers.php:55
2014-11-13 17:38:55 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\pages\admin\registeredusers.php [ 56 ] in C:\wamp\www\new\application\views\pages\admin\registeredusers.php:56
2014-11-13 17:38:55 --- DEBUG: #0 C:\wamp\www\new\application\views\pages\admin\registeredusers.php(56): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\wamp\\www\\new...', 56, Array)
#1 C:\wamp\www\new\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\new...')
#2 C:\wamp\www\new\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\new...', Array)
#3 C:\wamp\www\new\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\new\application\views\layouts\main.php(23): Kohana_View->__toString()
#5 C:\wamp\www\new\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\new...')
#6 C:\wamp\www\new\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\new...', Array)
#7 C:\wamp\www\new\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\new\application\classes\Controller\System\Base.php(78): Kohana_Controller_Template->after()
#9 C:\wamp\www\new\system\classes\Kohana\Controller.php(87): Controller_System_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\new\application\views\pages\admin\registeredusers.php:56
2014-11-13 18:22:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Admin.php [ 33 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:33
2014-11-13 18:22:40 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 33, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addrealitv()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:33
2014-11-13 18:23:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Admin.php [ 33 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:33
2014-11-13 18:23:29 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 33, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addrealitv()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:33
2014-11-13 18:24:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Admin.php [ 33 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:33
2014-11-13 18:24:37 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 33, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addrealitv()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:33
2014-11-13 18:26:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Admin.php [ 33 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:33
2014-11-13 18:26:15 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 33, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addrealitv()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:33
2014-11-13 18:26:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\Admin.php [ 33 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:33
2014-11-13 18:26:51 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 33, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_addrealitv()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:33
2014-11-13 18:30:00 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete teacher model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:60
2014-11-13 18:30:00 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(60): Kohana_ORM->delete()
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_delusers()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:60
2014-11-13 19:06:09 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete teacher model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:66
2014-11-13 19:06:09 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(66): Kohana_ORM->delete()
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_delusers()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:66
2014-11-13 19:06:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Auth.php [ 44 ] in file:line
2014-11-13 19:06:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-13 20:23:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: combo ~ APPPATH\classes\Controller\Admin.php [ 34 ] in C:\wamp\www\new\application\classes\Controller\Admin.php:34
2014-11-13 20:23:54 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\Admin.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\new...', 34, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(84): Controller_Admin->action_rasp()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\Admin.php:34
2014-11-13 21:27:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Admin.php [ 71 ] in file:line
2014-11-13 21:27:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line