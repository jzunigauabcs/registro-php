<?php
session_start();
require_once('./config/database.php');

if(!$_SERVER['REQUEST_METHOD'] === "POST"){
    header('location:home.php?status=1');
} else {
    $usuario_id = $_SESSION['usuario_id'];
    $mensaje = $_POST['mensaje'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $db = new Database();
    $pdo = $db->getConnection();
    $query = "INSERT INTO mensajes(mensaje, lat, lng, usuario_id) VALUE(:mensaje, :lat, :lng, :usuario_id)";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':mensaje',$mensaje);
    $stmt->bindValue(':lat',$lat);
    $stmt->bindValue(':lng', $lng);
    $stmt->bindValue(':usuario_id', $usuario_id);


    if($stmt->execute()) {
        header('location:home.php?status=0');
    } 

}
?>
