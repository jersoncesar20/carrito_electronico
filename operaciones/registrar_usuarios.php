<?php 

include("../include/conexion.php"); 

$dni=$_POST["dni"];
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];
$fecha_nac=$_POST["fecha_nac"];

$consulta = "INSERT INTO usuario (dni,apellidos_nombres,correo,telefono,direccion,fecha_nacimiento,password,activo,reset_password,token_password)
VALUES ('$dni','$nombre','$correo','$telefono','$direccion','$fecha_nac','$dni',1,0,' ')";

$ejecutar = mysqli_query($conexion,$consulta);

if($ejecutar){
    echo "REGISTRO EXITOSO";
}else{
    echo "ERROR EN EL REGISTRO";
}

//echo $dni."<br>";
//echo $nombre."<br>";
//echo $correo."<br>";
//echo $telefono."<br>";
//echo $direccion."<br>";
//echo $fecha_nac."<br>";



?>