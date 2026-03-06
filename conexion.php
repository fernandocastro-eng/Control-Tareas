<?php

$servidor="localhost";
$usuario="root";
$password="";
$base_datos="asignaciones";

$conexion=mysqli_connect($servidor,$usuario,$password,$base_datos);

if(!$conexion) {
    die("Error de conexion:".
    mysqli_connect_error());
}else{
    echo "Conexion exitosa!";

}
?>