<?php

class Tarjeta{
    private $numerotarjeta;
    private $documento;
    private $codigo;
    private $fechaVencimiento;



    public function __construct ($numerotarjeta,$documento,$codigo,$fechaVencimiento){
        $this->numerotarjeta = $numerotarjeta;
        $this->documento = $documento;
        $this->codigo = $codigo;
        $this->fechaVencimiento = $fechaVencimiento;
       
    }

    public function getNumerotarjeta(){
        return $this->numerotarjeta;
       }
      
       public function setNumerotarjeta($numerotarjeta){
        $this->numerotarjeta = $numerotarjeta;
       }
      
       public function getDocumento(){
        return $this->documento;
       }
      
       public function setDocumento($documento){
        $this->documento = $documento;
       }
      
       public function getCodigo(){
        return $this->codigo;
       }
      
       public function setCodigo($codigo){
        $this->codigo = $codigo;
       }
      
       public function getFechaVencimiento(){
        return $this->fechaVencimiento;
       }
      
       public function setFechaVencimiento($fechaVencimiento){
        $this->fechaVencimiento = $fechaVencimiento;
       }
}
