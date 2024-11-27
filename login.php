<?php
session_start();
require_once('./config/database.php');

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location:index.php');
} else {
    if(!isset($_POST['username']) || !isset($_POST['password'])) {
        header('location:index.php?status=1');
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $db = new Database();
        $pdo = $db->getConnection();
        $query = "SELECT * FROM usuarios WHERE username = :username";
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':username', $username);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() === 1 && password_verify($password, $row['password'])) {
            $_SESSION['usuario_id'] = $row['id'];
            header('location:home.php');
        } else {
            header('location:index.php?status=3');
        }
    }
}
?>
