<?php
include_once "Objects/User.php";
include_once 'vendor/autoload.php';
use Firebase\JWT\JWT;

function authorize($connect, $data){
    include_once "Config\parametrs.php"; 
    $user = new User($connect);
    $user->email = $data['email'];
    $user->password = $data['password'];
    $email_exists = $user->emailExists();
    if ($email_exists && password_verify($data['password'], $user->password)) {
 
        $token = array(
           "iss" => $iss,
           "aud" => $aud,
           "iat" => $iat,
           "nbf" => $nbf,
           "data" => array(
               "id" => $user->id
           )
        );
     
        http_response_code(200);
     
        $jwt = JWT::encode($token, $key, 'HS256');
        $res = [
            "status" => true,
            "message" => "Успешный вход в систему",
            "jwt" => $jwt
        ];
        header("Authorization: " . $jwt);
        echo json_encode($res);
    }
     
    else {
     
      http_response_code(401);
    
      $res = [
        "status" => false,
        "message" => "Ошибка входа",
    ];
    echo json_encode($res);
    }
}
?>