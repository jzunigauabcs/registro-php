<?php
if($_SERVER['REQUEST_METHOD'] === "GET" && isset($_GET['status'])):
$status = $_GET['status'];
$messages = array(
    'Datos almacenados correctamente',
    'Petición incorrecta',
    'Ocurrió un error al intentar almacenar los datos',
    'Usuario o contraseña incorrectos'
);
switch($status) {
    case 0:
        $alert_type = 'success';
    break;
    case 1:
    case 2:
    case 3:
        $alert_type = 'error';
        break;
    default:
        $alert_type = '';
}
    $alert_msg = $messages[$status];
?>

<div class="alert alert-<?php echo $alert_type; ?>">
    <?php echo $alert_msg; ?>
</div>
<?php 
endif;
?>
