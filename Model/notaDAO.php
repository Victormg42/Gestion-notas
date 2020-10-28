<?php
require_once 'nota.php';
class NotaDao{
    // ATRIBUTOS //
    
    public function __construct(){
    }

    public function modificarNotas(){
        include 'conexion.php';
        $pdo->beginTransaction();
        $query = "INSERT INTO `tbl_notas`(`nom_asig`, `id_alum`, `nota`) VALUES ('Matematicas',?,NULL), ('Fisica',?,NULL), ('Programacion',?,NULL);";
        $sentencia = $pdo->prepare($query);
        $sentencia->bindParam(2,$id_alum);
        $sentencia->execute();
        $pdo->commit();
    }
}