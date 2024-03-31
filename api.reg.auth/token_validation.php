<?php
header('Content-Type: application/json');
include_once "Config/connect.php";
include_once 'vendor/autoload.php';
use \Firebase\JWT\JWT;
use \Firebase\JWT\Key; 
function token_validation(){
    include_once "Config\parametrs.php"; 

    $jwt = substr(getallheaders()['Authorization'], 7);

    if ($jwt) {
        try {
            $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
    
            http_response_code(200);
            
            $res = [
                "status" => true,
                "message" => "Доступ разрешен",
                "data" => $decoded->data
            ];
            echo json_encode($res);
        }
    
        catch (Exception $e) {
            http_response_code(401);
        
            $res = [
                "status" => false,
                "message" => "Время авторизации прошло, авторизируйтесь заново",
            ];
            echo json_encode($res);
        }
    }
    
    else {
        http_response_code(401);
        $res = [
            "status" => false,
            "message" => "Доступ запрещен",
        ];
        echo json_encode($res);
    }
}
?>