<?php
$user="n260m_15888982";
$password="prinsesa";
$server="sql313.260mb.net";
$bd="n260m_15888982_prueba";


$cadena=mysql_connect($server,$user,$password)or die("Error en la conexion: ".mysql_error());
mysql_select_db($bd, $cadena);
?>
