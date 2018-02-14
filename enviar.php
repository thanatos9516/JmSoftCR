<?php
include 'cn.php';

$destino = "chepe352013@gmail.com";
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$tema = $_POST["tema"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$insertar = "INSERT INTO contactos(nombre, email, tema, telefono, mensaje) VALUES ('$nombre','$email','$tema','$telefono','$mensaje')";

$contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nTema: " . $tema . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje; 
mail($destino, $tema, $contenido);
//echo"<script type=\"text/javascript\">alert('Gracias por contactarnos'); window.location='index.html';</script>";  

$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
    echo 'Error al registrar';
}
else{
    echo"<script type=\"text/javascript\">alert('Gracias por contactarnos'); window.location='index.html';</script>";  
}
mysqli_close($conexion);

?>