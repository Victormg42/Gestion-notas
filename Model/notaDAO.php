<?php
require_once 'nota.php';
class NotaDao{
    // ATRIBUTOS //
    
    public function __construct(){
    }

    public function modificarNotas($id_alum){
        include 'conexion.php';
        $pdo->beginTransaction();
        $query = "INSERT INTO `tbl_notas`(`nom_asig`, `id_alum`, `nota`) VALUES ('Matematicas',?,NULL), ('Fisica',?,NULL), ('Programacion',?,NULL);";
        $sentencia = $pdo->prepare($query);
        $sentencia->bindParam(1,$id_alum);
        $sentencia->bindParam(2,$id_alum);
        $sentencia->bindParam(3,$id_alum);
        $sentencia->execute();

        $query1 = "UPDATE tbl_notas SET `nota` = ? WHERE nom_asig = 'Matematicas' AND id_alum = ?";
        $sentencia1=$pdo->prepare($query1);
        $notam=$_POST['notam'];
        $sentencia1->bindParam(1,$notam);
        $sentencia1->bindParam(2,$id_alum);
        $sentencia1->execute();

        $query2 = "UPDATE tbl_notas SET `nota` = ? WHERE nom_asig = 'Fisica' AND id_alum = ?";
        $notaf=$_POST['notaf'];
        $sentencia2=$pdo->prepare($query2);
        $sentencia2->bindParam(1,$notaf);
        $sentencia2->bindParam(2,$id_alum);
        $sentencia2->execute();

        $query3 = "UPDATE tbl_notas SET `nota` = ? WHERE nom_asig = 'Programacion' AND id_alum = ?";
        $notap=$_POST['notap'];
        $sentencia3=$pdo->prepare($query3);
        $sentencia3->bindParam(1,$notap);
        $sentencia3->bindParam(2,$id_alum);
        $sentencia3->execute();

        $pdo->commit();
    }
}