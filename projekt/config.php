<?php
define('_SERVER_NAME', 'localhost');
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '/projekt');
define('_APP_URL', _SERVER_URL . _APP_ROOT); // Теперь _APP_URL включает путь к приложению
define("_ROOT_PATH", dirname(__FILE__));
?>
