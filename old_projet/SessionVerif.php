<?php
session_start();

if(!isset($_SESSION['logged']) || !$_SESSION['logged']){
    header('location : ConnexionPage.php');
}

$login = isset($_SESSION['login']) ? $_SESSION['login'] : '';

?>