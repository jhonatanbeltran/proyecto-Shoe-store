<?php

class admin{

    private $codigo;
    private $pass;

        public function __construct( $codigo, $pass){
            $this->codigo = $codigo;
            $this->pass = $pass;

        }

        public function getCodigo(){
            return $this->codigo;
        }

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function getPass(){
            return $this->pass;
        }

        public function setPass($pass){
            $this->pass = $pass;
        }


    


}