<?php

class Tipoproducto{

    private $idtipoProducto;
    private $nombre;

    public function __construct ($idtipoProducto,$nombre){
        $this->idtipoProducto = $idtipoProducto;
        $this->nombre = $nombre;
    }

    public function getIdtipoProducto(){
        return $this->idtipoProducto;
       }
      
       public function setIdtipoProducto($idtipoProducto){
        $this->idtipoProducto = $idtipoProducto;
       }
      
       public function getNombre(){
        return $this->nombre;
       }
      
       public function setNombre($nombre){
        $this->nombre = $nombre;
       }

}