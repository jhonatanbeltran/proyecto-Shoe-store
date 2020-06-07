<?php

    class cliente{

        private $documento;
        private $tipodocumento;
        private $nombres;
        private $apellidos;
        private $genero;
        private $fechaNacimiento;
        private $email;
        private $contraseña;
        private $departamento;
        private $municipio;
        private $dirreccion;


        public function __construct($documento,$tipodocumento,$nombres,$apellidos,$genero,$fechaNacimiento,$email,$contraseña, $departamento,$municipio,$dirreccion) { 
            $this->documento = $documento; 
            $this->tipodocumento = $tipodocumento;
            $this->nombres = $nombres;
            $this->apellidos = $apellidos;
            $this->genero = $genero;
            $this->fechaNacimiento = $fechaNacimiento;
            $this->email = $email;
            $this->contraseña = $contraseña;
            $this->departamento = $departamento;
            $this->municipio = $municipio;
            $this->dirreccion = $dirreccion;
            
         }
    
         public function getDocumento(){
            return $this->documento;
           }
          
           public function setDocumento($documento){
            $this->documento = $documento;
           }
          
           public function getTipodocumento(){
            return $this->tipodocumento;
           }
          
           public function setTipodocumento($tipodocumento){
            $this->tipodocumento = $tipodocumento;
           }
          
           public function getNombres(){
            return $this->nombres;
           }
          
           public function setNombres($nombres){
            $this->nombres = $nombres;
           }
          
           public function getApellidos(){
            return $this->apellidos;
           }
          
           public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
           }
          
           public function getGenero(){
            return $this->genero;
           }
          
           public function setGenero($genero){
            $this->genero = $genero;
           }
          
           public function getFechaNacimiento(){
            return $this->fechaNacimiento;
           }
          
           public function setFechaNacimiento($fechaNacimiento){
            $this->fechaNacimiento = $fechaNacimiento;
           }
          
           public function getEmail(){
            return $this->email;
           }
          
           public function setEmail($email){
            $this->email = $email;
           }
          
           public function getContraseña(){
            return $this->contraseña;
           }
          
           public function setContraseña($contraseña){
            $this->contraseña = $contraseña;
           }
          
           public function getDepartamento(){
            return $this->departamento;
           }
          
           public function setDepartamento($departamento){
            $this->departamento = $departamento;
           }
          
           public function getMunicipio(){
            return $this->municipio;
           }
          
           public function setMunicipio($municipio){
            $this->municipio = $municipio;
           }
          
           public function getDirreccion(){
            return $this->dirreccion;
           }
          
           public function setDirreccion($dirreccion){
            $this->dirreccion = $dirreccion;
           }
           
           


    }