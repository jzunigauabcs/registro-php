<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header('location:login.php');
}
?>
<?php
require_once('includes/header.php');
require_once('templates/alert.php');
?>
<div class="app">
    <div id="map"></div>
</div>
<?php
require_once('includes/footer.php');
?>
