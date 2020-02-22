<?php
	session_start();
	
	

	$dbname ='ticket';
	error_reporting(0);
	$conexion = mysql_connect("localhost", "root", "zuleta99")or die(mysql_error());
	mysql_set_charset('UTF8',$conexion);
	mysql_select_db($dbname, $conexion)or die(mysql_error());	

$sqlC = 'SELECT * FROM codigo_barras WHERE codigo = "'.$_REQUEST['codigo'].'" ';
		
							 //echo $sqlC."<br>";
							
							$resC = mysql_query($sqlC) or die (mysql_error());
							$rowC = mysql_fetch_array($resC);
		echo $rowC['id_loc'];					
?>