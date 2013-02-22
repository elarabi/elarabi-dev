<?php 
define('APPLICATION_ROOT_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
include_once APPLICATION_ROOT_PATH.'/Controllers/Index.php';
include_once APPLICATION_ROOT_PATH.'/Models/Object.php';
include_once APPLICATION_ROOT_PATH.'/Views/Html.php';

$application = new IndexController();
$application->render();