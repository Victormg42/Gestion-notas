<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">  
    </head>
    <body>
        <h2>Modificar</h2>

        <?php
        include '../Model/conexion.php';
        $id=$_GET['id_alum'];
        //echo $id;
        // Recuperar información //
        $query="SELECT nombre_alum, apellido1, apellido2, grupo_alum, email_alum, passwd_alum FROM tbl_alumnos WHERE id_alum=$id";
        $sentencia=$pdo->prepare($query);
        $sentencia->execute();
        $alumno=$sentencia->fetch(PDO::FETCH_ASSOC);
        //print_r($persona);
        ?>
        <form action="actualizar.php" method="post">
            <label for="nombre_alum">Nombre alumno:</label><br>
            <input type="text" id="nombre_alum" name="nombre_alum" value=<?php echo $alumno['nombre_alum']; ?>><br>
            <label for="apellido1">Primer apellido:</label><br>
            <input type="text" id="apellido1" name="apellido1" value=<?php echo $alumno['apellido1']; ?>><br>
            <label for="notam">Nota Matematicas:</label><br>
            <input type="number" id="notam" name="notam"><br>
            <label for="notaf">Nota Fisica:</label><br>
            <input type="number" id="notaf" name="notaf"><br>
            <label for="notap">Nota Programacion:</label><br>
            <input type="number" id="notap" name="notap"><br>
            <input type="hidden" name="id" value="<?php echo $id; ?>"><br>
            <input type="submit" value="Insertar nota">
        </form>
    </body>
</html>