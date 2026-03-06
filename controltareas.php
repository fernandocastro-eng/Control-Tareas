<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Tareas Asignadas</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Registro de Tareas</h1>

    <form action="guardar.php"
    method="POST">

    <label>Codigo:</label>
    <input type="text" name="codigo">
    
    <label>Tarea:</label>
    <input type="text" name="tarea">

    <label>Docente:</label>
    <input type="text" name="docente">

    <label>Fecha:</label>
    <input type="date" name="fecha">
 
    <div class="grupo">
    <label>observaciones:</label>
    <textarea name="observaciones"
     rows="4"></textarea>
</div>

<button type="submit">Guardar Tarea</button>

</form>

</body>
</html>