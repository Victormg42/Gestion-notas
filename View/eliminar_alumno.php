<?php
require_once '../Model/alumnoDAO.php';
    $id_alum = $_GET['id_alum'];
    $alumno = new AlumnoDao();
    $alumno->eliminarAlumno($id_alum);
    header('Location: mostrar_alumnos.php');

?>