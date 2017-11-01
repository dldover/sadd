<?php
session_start();

if(isset($_SESSION["LOGGED_IN"]))
{
	session_unset($_SESSION["LOGGED_IN"]);
	session_destroy();
	header('Location: http://192.168.64.2');
}
?>