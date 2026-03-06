<?php

include("conexion.php");


$codigo = $_POST['codigo'];
$tarea  = $_POST['tarea'];
$profe  = $_POST['docente'];
$fecha  = $_POST['fecha'];
$obs    = $_POST['observaciones'];



$sql = "INSERT INTO Tareas (codigo, tarea_asig, docente, fecha_presentacion, observaciones) 
        VALUES ('$codigo', '$tarea', '$profe', '$fecha', '$obs')";


if (mysqli_query($conexion, $sql)) {
    echo "¡Tarea guardada con éxito!";
} else {
    echo "Error al guardar: " . mysqli_error($conexion);
}
?>