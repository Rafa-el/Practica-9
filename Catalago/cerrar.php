<!DOCTYPE html>
<?php
	session_start();
	session_destroy();
	header('Location: /Catalago/login.php');
?>
