<?php
require_once '../Model/alumnoDAO.php';
$alumno = new AlumnoDao();
$alumno->insertarAlumno();
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <div>
        <form action="crear_alumno.php" method="post">
            <label for="nombre_alum">Nombre persona:</label><br>
            <input type="text" id="nombre_alum" name="nombre_alum"><br>
            <label for="apellido1">Primer apellido:</label><br>
            <input type="text" id="apellido1" name="apellido1"><br>
            <label for="apellido2">Segundo apellido:</label><br>
            <input type="text" id="apellido2" name="apellido2"><br>
            <label for="grupo_alum">Grupo alumno:</label><br>
            <input type="text" id="grupo_alum" name="grupo_alum"><br>
            <label for="email_alum">Email alumno:</label><br>
            <input type="email" id="email_alum" name="email_alum"><br>
            <label for="passwd_alum">Password alumno:</label><br>
            <input type="password" id="passwd_alum" name="passwd_alum"><br>
            <input type="submit" value="Crear alumno">
        </form>
        </div>
    </body>
</html>