<?php
require_once 'persona.php';
class Administrador extends Persona{
    // Atributos //
    private $id_admin;
    //private $email_admin;
    //private $passwd_admin;

    // Definir constructor //
    public function __construct($email, $passwd){
        parent :: __construct($email, $passwd);
        //$this->id_admin=$id_admin;
    }

    /**
     * Get the value of id_admin
     */ 
    public function getId_admin()
    {
        return $this->id_admin;
    }

    /**
     * Set the value of id_admin
     *
     * @return  self
     */ 
    public function setId_admin($id_admin)
    {
        $this->id_admin = $id_admin;

        return $this;
    }

}
?>