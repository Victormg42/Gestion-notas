<?php
require_once '../Model/notaDAO.php';
/*$name=$_POST['nombre_persona'];
$email=$_POST['email_persona'];*/
$id_alum=$_POST['id'];
$alumno = new NotaDao();
$alumno->modificarNotas($id_alum);

/*$query="UPDATE tbl_persona SET nombre_persona=? , email_persona=? WHERE id_persona=?";
$sentencia=$pdo->prepare($query);
$sentencia->bindParam(1,$name);
$sentencia->bindParam(2,$email);
$sentencia->bindParam(3,$id);
$sentencia->execute();*/
//$id_alum = $pdo->lastInsertId();

//$nota = $_POST['nota'];
/*$sentencia1->bindParam(1,$asignatura);
$sentencia1->bindParam(2,$id_alum);
$sentencia1->bindParam(3,$nota);
$sentencia1->execute();
$pdo->commit();
header('Location: mostrar_alumnos.php');*/



?>