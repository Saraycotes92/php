<?php
class Database {
    private $host = "localhost";
    private $dbname = "userDB";
    private $username = "root";
    private $password = "";
    public $conn;

    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
        } catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
