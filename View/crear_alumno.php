<?php
include '../Model/conexion.php';
try {
    //$sentencia1 = $pdo->prepare("INSERT INTO `tbl_persona` (`id_persona`, `nombre_persona`, `password_persona`, `email_persona`) VALUES (NULL, 'sergio', '1234', 'sergio@gmail.com');");
    /* @var $sentencia type */
    /*$sentencia=$pdo->prepare("INSERT INTO `tbl_persona` (`id_persona`, `nombre_persona`, `password_persona`, `email_persona`) VALUES (NULL,?,?,?)");
    $sentencia->bindParam(1,"javi2");
    $sentencia->bindParam(2,"123");
    $sentencia->bindParam(3,"javi@gmail.com");
    $sentencia->execute();
    $id_persona = $pdo->lastInsertId();*/
    /* Iniciar una transacción, desactivando 'autocommit' */
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
    //$sentencia = $pdo->prepare("INSERT INTO tbl_telefono (num_telefono,id_persona) VALUES (:num_telefono, :id_persona)");
    /*$sentencia1 = $pdo->prepare("INSERT INTO `tbl_telefono` (`num_telefono`, `id_persona`) VALUES (?,?);");
// Bind
    $num_telefono = $_POST['num_telefono'];
    $sentencia1->bindParam(1,$num_telefono);
    $sentencia1->bindParam(2,$id_persona);

    if ($_POST['num_telefono2'] != "") {
        $sentencia2 = $pdo->prepare("INSERT INTO `tbl_telefono` (`num_telefono`, `id_persona`) VALUES (?,?);");
        $num_telefono2 = $_POST['num_telefono2'];
        $sentencia2->bindParam(1,$num_telefono2);
        $sentencia2->bindParam(2,$id_persona);
        $sentencia2->execute();
    }
   
    //$sentencia->bindParam(':num_telefono', $num_telefono);
    //$sentencia->bindParam(':id_persona', $id_persona);
     $sentencia1->execute();*/
    echo "todo bien";
    //hacer todas las sentencias
    $pdo->commit();
    header('Location: mostrar_alumnos.php');
} catch (Exception $ex) {
    /* Reconocer un error y no hacer los cambios */
    $pdo->rollback();
    echo $ex->getMessage();
   
}
?>