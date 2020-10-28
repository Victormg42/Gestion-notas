<?php
require_once 'persona.php';
    class Alumno extends Persona {
        private $id_alum;
        private $nombre_alum;
        private $apellido1;
        private $apellido2;
        private $grupo_alum;

    function __construct($email, $passwd, $id_alum, $nombre_alum, $apellido1, $apellido2, $grupo_alum) {
        parent :: __construct($email, $passwd);
        $this->id_alum=$id_alum;
        $this->nombre_alum=$nombre_alum;
        $this->apellido1=$apellido1;
        $this->apellido2=$apellido2;
        $this->grupo_alum=$grupo_alum;
        }
        

        /**
         * Get the value of id_alum
         */ 
        public function getId_alum()
        {
                return $this->id_alum;
        }

        /**
         * Set the value of id_alum
         *
         * @return  self
         */ 
        public function setId_alum($id_alum)
        {
                $this->id_alum = $id_alum;

                return $this;
        }

        /**
         * Get the value of nombre_alum
         */ 
        public function getNombre_alum()
        {
                return $this->nombre_alum;
        }

        /**
         * Set the value of nombre_alum
         *
         * @return  self
         */ 
        public function setNombre_alum($nombre_alum)
        {
                $this->nombre_alum = $nombre_alum;

                return $this;
        }

        /**
         * Get the value of apellido1
         */ 
        public function getApellido1()
        {
                return $this->apellido1;
        }

        /**
         * Set the value of apellido1
         *
         * @return  self
         */ 
        public function setApellido1($apellido1)
        {
                $this->apellido1 = $apellido1;

                return $this;
        }

        /**
         * Get the value of apellido2
         */ 
        public function getApellido2()
        {
                return $this->apellido2;
        }

        /**
         * Set the value of apellido2
         *
         * @return  self
         */ 
        public function setApellido2($apellido2)
        {
                $this->apellido2 = $apellido2;

                return $this;
        }

        /**
         * Get the value of grupo_alum
         */ 
        public function getGrupo_alum()
        {
                return $this->grupo_alum;
        }

        /**
         * Set the value of grupo_alum
         *
         * @return  self
         */ 
        public function setGrupo_alum($grupo_alum)
        {
                $this->grupo_alum = $grupo_alum;

                return $this;
        }

        /**
         * Get the value of email_alum
         */ 
        public function getEmail_alum()
        {
                return $this->email_alum;
        }

        /**
         * Set the value of email_alum
         *
         * @return  self
         */ 
        public function setEmail_alum($email_alum)
        {
                $this->email_alum = $email_alum;

                return $this;
        }

        /**
         * Get the value of passwd_alum
         */ 
        public function getPasswd_alum()
        {
                return $this->passwd_alum;
        }

        /**
         * Set the value of passwd_alum
         *
         * @return  self
         */ 
        public function setPasswd_alum($passwd_alum)
        {
                $this->passwd_alum = $passwd_alum;

                return $this;
        }
    }

?>