<?php
/* @var $pdo PDO */

require_once 'model/User.php';
require_once 'model/UserProvider.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
require_once 'Logger.php';
require_once 'errorHandler.php';
$pdo = require_once 'db.php';

session_start();
throw new Exception('message');

$pwd = $_POST['password '];

if( strlen($pwd) > 30 ) {
try {
throw new Exeption('Слишком длинный пароль');
}catch (Throwable $throwable){
   echo 'Ошибка сервера '.$throwable->getMessage();
   require_once 'error.php';
   die();
}
}

$controller = $_GET['controller'] ?? 'home';
$routes = require 'routes.php';

require_once $routes[$controller];

?>