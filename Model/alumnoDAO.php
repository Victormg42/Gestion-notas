<?php
require_once 'alumno.php';
class AlumnoDao{

    public function __construct(){

    }


    public function mostrarAlumno(){
        include 'conexion.php';
        $query = "SELECT * FROM tbl_alumnos";
        $sentencia=$pdo->prepare($query);
        $sentencia->execute();
        $id_alum=-1;
        $lista_alumno=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        echo "<table style='width: 100%';>";
            echo "<tr>";
                echo "<th>Modificar</th>";
                echo "<th>Eliminar</th>";
                echo "<th>Nombre</th>";
                echo "<th>PrimerApellido</th>";
                echo "<th>SegundoApellido</th>";
            echo "</tr>";
        foreach($lista_alumno as $alumno) {
        echo "<tr style='text-align: center';>";
            if ($id_alum==$alumno['id_alum']) {
        //echo " , {$persona['num_telefono']}";
                $id_alum=-1;
                continue;
        } else {
            echo "<br>";
        }
            $id_alum=$alumno['id_alum'];
            echo "<td><a href='actualizar_alumno.php?id_alum=$id_alum'>Modificar </a></td>";
            echo "<td><a href='eliminar_alumno.php?id_alum=$id_alum'>Eliminar </a></td>";
            echo "<td>{$alumno['nombre_alum']}</td>";
            echo "<td>{$alumno['apellido1']}</td>";
            echo "<td>{$alumno['apellido2']}</td>";
            $id_alum=$alumno['id_alum'];
            echo "</tr>";
        }
            echo "</table>";
    }

    public function filtrarAlumno(){
        include 'conexion.php';
        $q = "SELECT id_alum, nombre_alum, apellido1, apellido2 FROM tbl_alumnos WHERE nombre_alum 
        LIKE '%{$_POST['fnombre']}%' AND apellido1 LIKE '%{$_POST['fapellido']}%'";
        $sentencia = $pdo->prepare($q);
        $sentencia->execute();
        $id_alum=-1;
        $lista_alumno=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            echo "<table style='width: 100%';>";
                echo "<tr>";
                    echo "<th>Modificar</th>";
                    echo "<th>Eliminar</th>";
                    echo "<th>Nombre</th>";
                    echo "<th>PrimerApellido</th>";
                    echo "<th>SegundoApellido</th>";
                echo "</tr>";
    foreach($lista_alumno as $alumno) {
        echo "<tr style='text-align: center';>";
            if ($id_alum==$alumno['id_alum']) {
                //echo " , {$persona['num_telefono']}";
                $id_alum=-1;
                continue;
            } else {
                echo "<br>";
            }
        $id_alum=$alumno['id_alum'];
        echo "<td><a href='actualizar_alumno.php?id_alum=$id_alum'>Modificar </a></td>";
        echo "<td><a href='eliminar_alumno.php?id_alum=$id_alum'>Eliminar </a></td>";
        echo "<td>{$alumno['nombre_alum']}</td>";
        echo "<td>{$alumno['apellido1']}</td>";
        echo "<td>{$alumno['apellido2']}</td>";
        $id_alum=$alumno['id_alum'];
        echo "</tr>";
        }
    echo "</table>";
    }
}