<?php
class Database
{
    // Учётные данные базы данных
    private $host = "localhost";
    private $db_name = "api_reg_auth";
    private $username = "root";
    private $password = "";
    public $connect;

    // Получаем соединение с базой данных
    public function getConnection()
    {
        $this->connect = null;

        try {
            $this->connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Ошибка соединения с БД: " . $exception->getMessage();
        }

        return $this->connect;
    }
}