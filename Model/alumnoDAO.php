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
            echo "<td><a href='actualizar_alumno.php?id_alum=".$id_alum."'>Modificar </a></td>";
            echo "<td><a href='eliminar_alumno.php?id_alum=".$id_alum."'>Eliminar </a></td>";
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

    public function eliminarAlumno($id_alum){
        include 'conexion.php';
        try {
        $pdo->beginTransaction();
        $select = "SELECT tbl_alumnos.id_alum, tbl_alumnos.nombre_alum, tbl_alumnos.apellido1, tbl_notas.nota FROM tbl_alumnos 
        INNER JOIN tbl_notas ON tbl_alumnos.id_alum = tbl_notas.id_alum 
        WHERE tbl_alumnos.id_alum = ?";
        $sentencia3 = $pdo->prepare($select);
        $sentencia3->bindParam(1,$id_alum);
        $sentencia3->execute();
            if ($sentencia3->rowCount() == 0) {
                $query="DELETE FROM tbl_alumnos WHERE id_alum = ?";
                $sentencia=$pdo->prepare($query);
                $sentencia->bindParam(1,$id_alum);
                $sentencia->execute();
                $pdo->commit();
            } else {
                $query1="DELETE FROM tbl_notas WHERE id_alum = ?";
                $sentencia1=$pdo->prepare($query1);
                $sentencia1->bindParam(1,$id_alum);
                $sentencia1->execute();

                $query2="DELETE FROM tbl_alumnos WHERE id_alum = ?";
                $sentencia2=$pdo->prepare($query2);
                $sentencia2->bindParam(1,$id_alum);
                $sentencia2->execute();
                $pdo->commit();
            }
        } catch (Exception $ex) {
            /* Reconocer un error y no hacer los cambios */
            $pdo->rollback();
            echo $ex->getMessage();
        }
    }

    public function insertarAlumno(){
        include '../Model/conexion.php';
        try {
            // Comienza la transaccion
            $pdo->beginTransaction();
            $query="INSERT INTO `tbl_alumnos` (`id_alum`, `nombre_alum`, `apellido1`, `apellido2`, `grupo_alum`, `email_alum`, `passwd_alum`) VALUES (NULL,?,?,?,?,?,?);";
            $sentencia=$pdo->prepare($query);
            $nombre=$_POST['nombre_alum'];
            $apellido1=$_POST['apellido1'];
            $apellido2=$_POST['apellido2'];
            $grupo=$_POST['grupo_alum'];
            $email=$_POST['email_alum'];
            $pas=$_POST['passwd_alum'];
                $sentencia->bindParam(1,$nombre);
                $sentencia->bindParam(2,$apellido1);
                $sentencia->bindParam(3,$apellido2);
                $sentencia->bindParam(4,$grupo);
                $sentencia->bindParam(5,$email);
                $sentencia->bindParam(6,$pas);
                $sentencia->execute();
            $id_alum = $pdo->lastInsertId();
            echo "todo bien";
            //hacer todas las sentencias
            $pdo->commit();
            header('Location: mostrar_alumnos.php');
        } catch (Exception $ex) {
            /* Reconocer un error y no hacer los cambios */
            $pdo->rollback();
            echo $ex->getMessage();
           
        }
    }
}
?>