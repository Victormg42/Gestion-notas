<?php
    abstract class Persona{
        protected $email;
        protected $passwd;

        function __construct($email, $passwd){
            $this->email=$email;
            $this->passwd=$passwd;
        }

        /**
         * Get the value of nombre
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of apellido
         */ 
        public function getPasswd()
        {
                return $this->passwd;
        }

        /**
         * Set the value of apellido
         *
         * @return  self
         */ 
        public function setPasswd($passwd)
        {
                $this->passwd = $passwd;

                return $this;
        }
}
    
?>