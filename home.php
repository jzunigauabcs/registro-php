<?php 
session_start();
if(!isset($_SESSION['usuario_id'])) {
    header('location:login.php');
}
?>
<?php
$alert_float = "alert-float";
require_once('includes/header.php');
require_once('templates/alert.php');

?>
<div class="app">
    <?php include_once('templates/alert.php'); ?>
    <div id="formMensajes" class="app-mensajes form-container">
        <form action="save_mensaje.php" class="" method="POST">
            <div class="alert alert-warning">
                <ul>
                    <li>Selecciona un punto en mapa</li>
                    <li>Escribe un mensaje</li>
                    <li>Presiona guardar</li>
                </ul>
            </div>
            <h1 class="texto-centrado">Registrar mensaje</h1>
            <div class="fila">
                <label for="">Agregar mensaje</label>
                <textarea name="mensaje" id="" class="form-control"  rows="5"></textarea>
            </div>
            <input type="hidden" name="lat">
            <input type="hidden" name="lng">
            <div class="fila texto-centrado">
                <button class="btn">Guardar mensaje</button>
            </div>
        </form>
    </div>
    <div id="map"></div>
</div>
<script>
    <?php require_once('load_mensaje.php'); ?>
    const places = <?php echo json_encode(get_places()); ?>;
    console.log(places);
</script>
<?php
require_once('includes/footer.php');
?>
