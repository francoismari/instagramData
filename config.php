<?php
session_start();
$_SESSION['URL'] = $_GET['accessUrl'];

header('Location: data.php');
?>