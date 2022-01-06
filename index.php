<?php
$servidor="localhost";
$usuario="root";
$clave="";
$baseDedatos="registrar";

$enlace = mysqli_connect($servidor$usuario,$clave,$baseDedatos);

if(!enlace){
    echo"Error en la conexion con el servidor";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Historial medico</title>
</head>
<body>
    <div class="container">
        <nav>
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
              <span></span>
            </label>
            
            <ul class="menu__box">
              <li><a class="menu__item" href="../index.html">Inicio</a></li>
              <li><a class="menu__item" href="#">Acerca de nosotros</a></li>
              <li><a class="menu__item" href="#">Contacto</a></li>
              <li><a class="menu__item" href="../login.html">Login</a></li>
            </ul>
        </nav>
        <div class="banner">
            <h1>Tu salud es nuestra prioridad</h1>
            <div class="banner-href">
                <a class="banner-read" href="#">Leer mas</a>
                <a class="banner-contact" href="#">Contáctanos</a>
            </div>
            
        </div>
        
        

</body>
</html>