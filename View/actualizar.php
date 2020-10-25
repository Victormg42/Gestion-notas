<?php
include '../Model/conexion.php';

/*$name=$_POST['nombre_persona'];
$email=$_POST['email_persona'];*/


/*$query="UPDATE tbl_persona SET nombre_persona=? , email_persona=? WHERE id_persona=?";
$sentencia=$pdo->prepare($query);
$sentencia->bindParam(1,$name);
$sentencia->bindParam(2,$email);
$sentencia->bindParam(3,$id);
$sentencia->execute();*/
$pdo->beginTransaction();
//$id_alum = $pdo->lastInsertId();
$id_alum=$_POST['id'];
$query1="INSERT INTO `tbl_notas` (`id_nota`, `nom_asig`, `id_alum`, `nota`) VALUES (NULL,?,?,?);";
$sentencia1=$pdo->prepare($query1);
$asignatura = $_POST['nom_asig'];
$nota = $_POST['nota'];
$sentencia1->bindParam(1,$asignatura);
$sentencia1->bindParam(2,$id_alum);
$sentencia1->bindParam(3,$nota);
$sentencia1->execute();
$pdo->commit();

header('Location: mostrar_alumnos.php');

?>