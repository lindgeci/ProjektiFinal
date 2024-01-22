<?php
    class NEWS{
        private $id;
        private $NewsName;
        private $NewsText;
      
        public function __construct($NewsName,$NewsText){
            $this->NewsName = $NewsName;
            $this->NewsText = $NewsText;
        }

        public function getNewsName(){
            return $this->NewsName;
        }
        public function setNewsName($NewsName){
            $this->NewsName = $NewsName;
        }

        public function getNewsText(){
            return $this->NewsText;
        }
        public function setNewsText($NewsText){
            $this->NewsText = $NewsText;
        }

        public function __toString() {
            return "EmriILajmit: " . $this->NewsName . ", Paragrafi: " . $this->NewsText;
        }
    }

