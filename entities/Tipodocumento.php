<?php

class Tipodocumento{

    private $idtipodocumento;
    private $descripcion;

    public function __construct ($idtipodocumento,$descripcion){
        $this->idtipodocumento = $idtipodocumento;
        $this->descripcion = $descripcion;
    }

    public function getIdtipodocumento(){
        return $this->idtipodocumento;
       }
      
       public function setIdtipodocumento($idtipodocumento){
        $this->idtipodocumento = $idtipodocumento;
       }
      
       public function getDescripcion(){
        return $this->descripcion;
       }
      
       public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
       }

}