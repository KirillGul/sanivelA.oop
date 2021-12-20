<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');

//require_once 'application/bootstrap.php';

echo $_SERVER['REQUEST_URI'];
$routes1 = explode('/', $_SERVER['REQUEST_URI']);
var_dump($routes1);
