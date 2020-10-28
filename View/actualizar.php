<?php
require_once '../Model/notaDAO.php';
$id_alum=$_POST['id'];
$alumno = new NotaDao();
$alumno->modificarNotas($id_alum);
header('Location: mostrar_alumnos.php');
?>