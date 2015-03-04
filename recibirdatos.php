<?php
echo "PAGINA 2"."<br>";


//código conexíon
include "conexion.php";

$nom=$_POST["nombre"];
$app=$_POST["apellidop"];
$apm=$_POST["apellidom"];
$tel=$_POST["telefono"];
$corr=$_POST["correo"];
$dirs=$_POST["direcc"];
$obs=$_POST["obs"];



$texto=utf8_decode("Señora");
echo $texto;

$sql="INSERT INTO usuarios (Id_Usuarios, Nombre, Apellido_P, Apellido_M, Telefono, Correo, Direccion, Observaciones)VALUES('','$nom','$app','$apm','$tel','$corr','$dirs','$obs')";
$consul=mysql_query($sql,$cadena);

if($consul){
echo "Nombre:".$nom."<br>"; 
echo "Apellido Paterno:".$app."<br>";
echo "Apellido Materno:".$apm."<br>";
echo "Telefono:".$tel."<br>";
echo "Correo:".$corr."<br>";
echo "Dirección:".$dirs."<br>";
echo "Observacioens:".$obs."<br>";

echo "Datos guardados satisfactoriamente";
}else{
echo "Error al enviar los datos: ".mysql_error();
}
mysql_close($cadena);

?>
