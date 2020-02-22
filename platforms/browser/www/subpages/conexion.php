<?php
	session_start();
	
	if(!isset($_SESSION['index'])){
		$_SESSION['base'] = 'ticket';
    }else{
		$_SESSION['base'] = $_SESSION['index'];
    }

	$dbname = $_SESSION['base'];
	error_reporting(0);
	$conexion = mysql_connect("localhost", "root", "zuleta99")or die(mysql_error());
	mysql_set_charset('UTF8',$conexion);
	mysql_select_db($dbname, $conexion)or die(mysql_error());	
?>