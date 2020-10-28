<?php
require_once 'nota.php';
class NotaDao{
    // ATRIBUTOS //
    
    public function __construct(){
        include 'conexion.php';
    }

    public function modificarNotas(){
        $query = "UPDATE `tbl_notas` 
        INNER JOIN `tbl_alumnos` 
        ON tbl_alumnos.id_alum=tbl_notas.id_alum 
        SET tbl_notas.`nom_asig`= 'Matematicas', tbl_notas.`nota`= '8' 
        WHERE tbl_notas.nom_asig AND nota IS NULL AND tbl_alumnos.`id_alum` = ?;";
        $sentencia3 = $pdo->prepare($query);
        $sentencia3->execute();
        $pdo->commit();
    }
}