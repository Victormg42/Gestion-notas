<?php
require_once 'administrador.php';
class AdminDao{
    private $pdo;

    public function __construct(){
        include 'conexion.php';
        $this->pdo=$pdo;
    }

    public function login($admin){
        $query = "SELECT * FROM tbl_administrador WHERE email_admin=? AND passwd_admin=?";
        $sentencia=$this->pdo->prepare($query);
        $email=$admin->getEmail();
        $psswd=$admin->getPasswd();
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$psswd);
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        if(!empty($numRow) && $numRow==1){
            $admin->setEmail($result['email_admin']);
            $admin->setId_admin($result['Id_admin']);
            // Creamos la sesión //
            session_start();
            $_SESSION['admin']=$admin;
            return true;
        }else {
            return false;
        }
    }
}

?>