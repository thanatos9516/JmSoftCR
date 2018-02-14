<?php
include 'cn.php';
//recibir los datos y almacenar en variables
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$tema = $_POST["tema"];
$mensaje = $_POST["mensaje"];
//consulta para insertar
$insertar = "INSERT INTO contactos(nombre, email, tema, mensaje) VALUES ('$nombre','$email','$tema','$mensaje')";

//verifica que el usuario no exista en la BD
// $verificar_usuario = mysqli_query($conexion, "SELECT * FROM contactos WHERE nombre = '$nombre'");

//ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
    echo 'Error al registrar';
}
else{
    echo"<script type=\"text/javascript\">alert('Gracias por contactarnos'); window.location='index.html';</script>";  
}
mysqli_close($conexion);