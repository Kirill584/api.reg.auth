<?php

class User{
    private $conn;
    private $table_name = "users";
    public $id;
    public $email;
    public $password;
    public $password_check_status;
    public $email_check_valid;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function create(){
        $query = "INSERT INTO " . $this->table_name . "
                SET
                    email = :email,
                    password = :password";

        $stmt = $this->conn->prepare($query);

        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));

        $stmt->bindParam(":email", $this->email);
        $password_hash = password_hash($this->password, PASSWORD_BCRYPT);
        $stmt->bindParam(":password", $password_hash);

        $this->password_check_status = $this->check_password($this->password);
        $this->email_check_valid = $this->check_email($this->email);
        if (($this->password_check_status === 'perfect' or $this->password_check_status === 'good') and !$this->emailExists() and $this->email_check_valid){
            $stmt->execute();
            return true;
        }
        else{
            return false;
        }
    }

function check_password($password){
    $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            return 'weak_password';
        }
        elseif($uppercase && $lowercase && $number && $specialChars && strlen($password) >= 8 && strlen($password) <= 12) {
            return 'good';
        }
        else {
            return 'perfect';
        }
    }

    function emailExists(){
    
        $query = "SELECT id, password
                FROM " . $this->table_name . "
                WHERE email = ?
                LIMIT 0,1";
    
        $stmt = $this->conn->prepare($query);
    
        $this->email=htmlspecialchars(strip_tags($this->email));
    
        $stmt->bindParam(1, $this->email);
    
        $stmt->execute();
    
        $num = $stmt->rowCount();
    
        if ($num > 0) {
    
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
            $this->id = $row["id"];
            $this->password = $row["password"];
    
            return true;
        }
    
        return false;
    }

    function check_email($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    } 
}