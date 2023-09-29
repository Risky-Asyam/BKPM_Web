<?php
    class kalkulator{
        private $angka1;
        private $angka2;

        public function __construct($a, $b){
            $this->angka1 = $a;
            $this->angka2 = $b;
        }
        public function tambah(){
            return $this -> angka1 + $this -> angka2;
        }
        public function kurang(){
            return $this -> angka1 - $this -> angka2;
        }   
        public function kali(){
            return $this -> angka1 * $this -> angka2;
        }
        public function bagi(){
            return $this -> angka1 / $this -> angka2;
        }
    }
?>