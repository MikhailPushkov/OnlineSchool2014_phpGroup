<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-02 10:50:18 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Welcome.php [ 17 ] in C:\wamp\www\kohana\application\classes\Controller\Welcome.php:17
2014-10-02 10:50:18 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\Welcome.php(17): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\wamp\\www\\koh...', 17, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\Welcome.php:17
2014-10-02 11:28:02 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\main.php [ 16 ] in C:\wamp\www\kohana\application\classes\Controller\main.php:16
2014-10-02 11:28:02 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\main.php(16): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\wamp\\www\\koh...', 16, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\main.php:16