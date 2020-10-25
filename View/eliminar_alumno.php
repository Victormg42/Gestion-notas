<?php
include '../Model/conexion.php';
try {
    $pdo->beginTransaction();

    $id=$_GET['id_alum'];

    $query1="DELETE FROM tbl_alumnos WHERE id_alum = ?";
    $sentencia1=$pdo->prepare($query1);
    $sentencia1->bindParam(1,$id);
    $sentencia1->execute();

    /*$query="DELETE FROM tbl_persona WHERE id_persona = ?";
    $sentencia=$pdo->prepare($query);
    $sentencia->bindParam(1,$id);
    $sentencia->execute();*/

    $pdo->commit();
    header('Location: mostrar_alumnos.php');

} catch (Exception $ex) {
    /* Reconocer un error y no hacer los cambios */
    $pdo->rollback();
    echo $ex->getMessage();
}
?>