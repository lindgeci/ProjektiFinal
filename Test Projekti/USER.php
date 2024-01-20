<?php
    class USER{
        private $id;
        private $Name;
        private $Surname;
        private $Email;
        private $Password;

        public function __construct($Name, $Surname, $Email, $Password){
            $this->Name = $Name;
            $this->Surname = $Surname;
            $this->Email = $Email;
            $this->Password = $Password;
        }

        public function getName(){
            return $this->Name;
        }
        public function setName($Name){
            $this->Name = $Name;
        }

        public function getSurname(){
            return $this->Surname;
        }
        public function setSurname($Surname){
            $this->Surname = $Surname;
        }

        public function getEmail(){
            return $this->Email;
        }
        public function setEmail($Email){
            $this->Email = $Email;
        }

        public function getPassword(){
            return $this->Password;
        }
        public function setPassword($Password){
            $this->Password = $Password;
        }
        public function __toString(){
            return "Emri: ".$this->Name. " Mbiemri: ".$this->Surname;
        }
    }


?>