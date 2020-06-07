<?php


class departamento{

    private $idDepartamento;
    private $nombre;
    private $municipio;


    

	public function __constructor($idDepartamento,$nombre,$municipio) { 
        $this->idDepartamento = $idDepartamento; 
        $this->nombre = $nombre; 
        $this->municipio = $municipio; 
    }
    
    public function getIdDepartamento(){
        return $this->idDepartamento;
       }
      
       public function setIdDepartamento($idDepartamento){
        $this->idDepartamento = $idDepartamento;
       }
      
       public function getNombre(){
        return $this->nombre;
       }
      
       public function setNombre($nombre){
        $this->nombre = $nombre;
       }
      
       public function getMunicipio(){
        return $this->municipio;
       }
      
       public function setMunicipio($municipio){
        $this->municipio = $municipio;
       }
}