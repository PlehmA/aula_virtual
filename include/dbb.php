<?php
function crearConexion()
{
$config = parse_ini_file('include/database.ini');
}
$conexion = mysqli_connect ( $config ['SERVER'], $config ['USER'], $config ['PASSWORD'], $config ['NAMEBDD'] );
if (mysqli_connect_errno ()) 
{
	die ( "Error en la conexi�n de la base de datos" );
}
//Si nada sucede retornamos la conexi�nreturn $conexion;}