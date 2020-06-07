<?php

class Municipio{

    private $idMunicipio;
    private $nombre;


    

	public function __constructor($idMunicipio,$nombre) { 
        $this->idMunicipio = $idMunicipio; 
		$this->nombre = $nombre; 
    }
    
    public function getIdMunicipio(){
        return $this->idMunicipio;
       }
      
       public function setIdMunicipio($idMunicipio){
        $this->idMunicipio = $idMunicipio;
       }
      
       public function getNombre(){
        return $this->nombre;
       }
      
       public function setNombre($nombre){
        $this->nombre = $nombre;
       }
}