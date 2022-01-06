<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="registro";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn)
{
  die("No hay conexión: ".mysqli_connect_error());

}
$usuario =$_POST['usuario'];
$password =$_POST['password'];

$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario ='".$usuario."' and password ='".$password."'");
$nr = mysqli_num_rows($query);

if($nr == 1){
//header("Location: ejemplo.php")
echo "Bienvenido:" .$usuario;
header("Location: paciente.php");
}
else if ($nr == 0)
{
   echo "No ingreso";
   header("Location: login.html");
}


?>




