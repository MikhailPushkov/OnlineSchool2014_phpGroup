<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-19 11:31:56 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\System\Base.php [ 52 ] in C:\wamp\www\new\application\classes\Controller\System\Base.php:52
2014-11-19 11:31:56 --- DEBUG: #0 C:\wamp\www\new\application\classes\Controller\System\Base.php(52): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\wamp\\www\\new...', 52, Array)
#1 C:\wamp\www\new\system\classes\Kohana\Controller.php(87): Controller_System_Base->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\new\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 C:\wamp\www\new\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\new\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\new\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\new\application\classes\Controller\System\Base.php:52
2014-11-19 11:39:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\System\Base.php [ 35 ] in file:line
2014-11-19 11:39:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-19 10:55:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'A2' not found ~ APPPATH/classes/Controller/System/Base.php [ 29 ] in file:line
2014-11-19 10:55:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-19 10:55:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'A2' not found ~ APPPATH/classes/Controller/System/Base.php [ 29 ] in file:line
2014-11-19 10:55:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-19 10:59:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'A2' not found ~ APPPATH/classes/Controller/System/Base.php [ 29 ] in file:line
2014-11-19 10:59:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-19 11:01:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'A2' not found ~ APPPATH/classes/Controller/System/Base.php [ 29 ] in file:line
2014-11-19 11:01:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-19 11:07:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'A2' not found ~ xdebug://debug-eval [ 1 ] in file:line
2014-11-19 11:07:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-19 11:08:21 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'A1' at 'MODPATH/A1' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /srv/http/test.local/www/application/bootstrap.php:138
2014-11-19 11:08:21 --- DEBUG: #0 /srv/http/test.local/www/application/bootstrap.php(138): Kohana_Core::modules(Array)
#1 /srv/http/test.local/www/index.php(102): require('/srv/http/test....')
#2 {main} in /srv/http/test.local/www/application/bootstrap.php:138
2014-11-19 11:08:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'A2' not found ~ APPPATH/classes/Controller/System/Base.php [ 29 ] in file:line
2014-11-19 11:08:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-19 11:08:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'A2' not found ~ APPPATH/classes/Controller/System/Base.php [ 29 ] in file:line
2014-11-19 11:08:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-19 11:09:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'A2' not found ~ APPPATH/classes/Controller/System/Base.php [ 29 ] in file:line
2014-11-19 11:09:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-19 11:11:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'ACL_Core' not found ~ MODPATH/acl/classes/Acl.php [ 3 ] in file:line
2014-11-19 11:11:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-19 11:12:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'ACL_Core' not found ~ MODPATH/acl/classes/Acl.php [ 3 ] in file:line
2014-11-19 11:12:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-19 11:12:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Acl' not found ~ MODPATH/a2/classes/A2/Core.php [ 33 ] in file:line
2014-11-19 11:12:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-19 11:16:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Teacher::user() ~ APPPATH/classes/Controller/System/Base.php [ 32 ] in file:line
2014-11-19 11:16:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-19 13:32:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Message' not found ~ APPPATH\classes\Controller\System\Base.php [ 37 ] in file:line
2014-11-19 13:32:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line