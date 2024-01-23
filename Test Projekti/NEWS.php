<?php
    class NEWS{
        private $id;
        private $NewsName;
        private $NewsText;
        private $Foto;
      
        public function __construct($NewsName, $NewsText, $Foto){
            $this->NewsName = $NewsName;
            $this->NewsText = $NewsText;
            $this->Foto = $Foto;
        }

        public function getNewsName(){
            return $this->NewsName;
        }
        public function setNewsName($NewsName){
            $this->NewsName = $NewsName;
        }
        public function getFoto(){
            return $this->Foto;
        }
        public function setFoto($Foto){
            $this->Foto = $Foto;
        }

        public function getNewsText(){
            return $this->NewsText;
        }
        public function setNewsText($NewsText){
            $this->NewsText = $NewsText;
        }

        // public function __toString() {
        //     return "EmriILajmit: " . $this->NewsName . ", Paragrafi: " . $this->NewsText;
        // }
    }

