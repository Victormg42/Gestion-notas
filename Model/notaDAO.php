<?php
require_once 'nota.php';
class NotaDao{
    // ATRIBUTOS //
    
    public function __construct(){
        include 'conexion.php';
    }

    public function modificarNotas(){
        /*UPDATE tbl_notas 
    INNER JOIN tbl_alumnos 
    ON tbl_alumnos.id_alum=tbl_notas.id_alum
    SET `tbl_notas`.`nom_asig`= 'Matematicas', `tbl_notas`.`id_alum`= 5, `tbl_notas`.`nota` = '6'
    WHERE tbl_alumnos.id_alum = 5 AND tbl_notas.id_nota IS NULL;*/
    }
}