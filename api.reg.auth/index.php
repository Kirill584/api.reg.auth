<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header("Content-type: json/application");

require 'Config/connect.php';
require 'register.php';
require 'authorize.php';
require 'token_validation.php';

$method = $_SERVER['REQUEST_METHOD'];

$q = $_GET["q"];
$params = explode('/', $q);

$type = $params[0];

$db = new Database();
$connect = $db->getConnection();

switch ($method) {
    case 'GET':
        switch ($type) {
            case 'feed':
                token_validation();
                break;
        }
        break;
    case 'POST':
        switch ($type) {
            case 'register':
                register($connect, $_POST);
                break;
            case 'authorize':
                authorize($connect, $_POST);
                break;
        }
        break;
        }
?>