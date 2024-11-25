<?php
require_once('./config/database.php');

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
     header('location:register_form.php?status=2');
} else {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $db = new Database();
    $pdo = $db->getConnection();
    $query = "INSERT INTO usuarios(username, password, email) VALUES(:username, :password, :email)";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":username", $username);
    $stmt->bindValue(":password", password_hash($password, PASSWORD_BCRYPT));
    $stmt->bindValue(":email", $email);
    if($stmt->execute()) {
        header('location:index.php?status=0');
    } else {
        header('location:register.php?status=2');
    }
}
?>
