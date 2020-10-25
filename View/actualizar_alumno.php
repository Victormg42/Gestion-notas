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
            <label for="nom_asig">Nombre asignatura:</label><br>
            <input type="text" id="nom_asig" name="nom_asig"><br>
            <label for="nota">Nota alumno:</label><br>
            <input type="text" id="nota" name="nota"><br>
            <input type="hidden" name="id" value="<?php echo $id; ?>"><br>
            <input type="submit" value="Insertar nota">
        </form>
    </body>
</html>