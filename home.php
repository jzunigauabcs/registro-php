<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header('location:login.php');
}
echo $_SESSION['username'];
?>
