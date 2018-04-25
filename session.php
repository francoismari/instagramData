<?php
session_start();

if(!isset($_SESSION['URL']))
{
	header('Location: index.php');
}	
?>