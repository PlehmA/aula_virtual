<?php 
include_once "include/database.ini"
// datos para la coneccion a mysql 
$name=$_POST['nombre'];
$user=$_POST['usuario'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$email=$_POST['email'];
//llamando funciones
$conexion=mysql_connect('SERVER,USER,PASSWORD') or die ('se murio');
mysql_select_db () or die ('jajajajaj');
$datos= "INSERT INTO login() VALUES ()";
mysql_query($datos) or die('');
mysql_close($conexion)
?>