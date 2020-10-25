<?php
    class Telefono {
        private $id_nota;
        private $nom_asig;
        private $id_alum;
        private $nota;

        function __construct(){

        }


        /**
         * Get the value of id_nota
         */ 
        public function getId_nota()
        {
                return $this->id_nota;
        }

        /**
         * Set the value of id_nota
         *
         * @return  self
         */ 
        public function setId_nota($id_nota)
        {
                $this->id_nota = $id_nota;

                return $this;
        }

        /**
         * Get the value of nom_asig
         */ 
        public function getNom_asig()
        {
                return $this->nom_asig;
        }

        /**
         * Set the value of nom_asig
         *
         * @return  self
         */ 
        public function setNom_asig($nom_asig)
        {
                $this->nom_asig = $nom_asig;

                return $this;
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
         * Get the value of nota
         */ 
        public function getNota()
        {
                return $this->nota;
        }

        /**
         * Set the value of nota
         *
         * @return  self
         */ 
        public function setNota($nota)
        {
                $this->nota = $nota;

                return $this;
        }
    }
?>