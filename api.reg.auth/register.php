<?php
include_once "Objects/User.php";
function register($connect, $data){
    $user = new User($connect);
    $user->email = $data['email'];
    $user->password = $data['password'];
    if ($user->create()){

        http_response_code(201);
        $query = "Select id from users where email = :email";

        $stmt = $connect->prepare($query);
    
        $user->email=htmlspecialchars(strip_tags($user->email));
    
        $stmt->bindParam(":email", $user->email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $user_id = $row["id"];
        $res = [
            "status"=> true,
            "user_id"=> $user_id,
            "password_check_satus"=> $user->password_check_status,
        ];
        echo json_encode($res);
        }
    elseif ($user->emailExists()){
        http_response_code(400);

        $res = [
            "status"=> false,
            "message"=> "Данный email занят",
        ];
        echo json_encode($res);
    }
    else{
        http_response_code(400);

        $res = [
            "status"=> false,
            "message" => "Проверьте корректность email или пароля на соответствие требований (Как минимум одна прописная, одна заглавная, одна цифра, один спец.символ, минимальная длина 8).",
            "password_check_satus"=> $user->password_check_status,
            "email_check_valid"=> $user->email_check_valid,
        ];
        echo json_encode($res);
    }
}