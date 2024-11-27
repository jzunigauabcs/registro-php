<?php 
require_once('./config/database.php');
function get_places() {
    $results = array();
    if(!$_SERVER['REQUEST_METHOD'] = 'POST') {
        header('location:index.php?status=1');
    } else {
        $usuario_id = $_SESSION['usuario_id'];
        $db = new Database();
        $pdo = $db->getConnection();
        $query = "SELECT * FROM mensajes WHERE usuario_id = :usuario_id";
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':usuario_id', $usuario_id);
        $stmt->execute();
        //$row = $stmt->fetch(PDO::FETCH_ASSOC);
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($results, $row);
        }
    }
    return $results;
}
?>
