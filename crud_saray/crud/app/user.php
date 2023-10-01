<?php
include_once 'Database.php';
class User {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function insertUser($username, $email, $age) {
        $query = "INSERT INTO users (username, email, age) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$username, $email, $age]);
    }

    public function updateUser($id, $username, $email, $age) {
        $query = "UPDATE users SET username=?, email=?, age=? WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$username, $email, $age, $id]);
    }

    public function deleteUser($id) {
        $query = "DELETE FROM users WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
    }

    public function listUsers() {
        $query = "SELECT * FROM users";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById($id) {
        $query = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
