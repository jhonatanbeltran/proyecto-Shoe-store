<?php
  
class Pedido{

    private $idPedido;
    private $idcliente;
    private $estado;
    private $fechaPedido;
    private $departamento;
    private $direccionEnvio;
    private $total;



    public function __constructor($idPedido,$idcliente,$estado,$fechaPedido,$departamento,$total) { 
        $this->idPedido = $idPedido; 
        $this->idcliente = $idcliente;
        $this->estado = $estado;
        $this->fechaPedido = $fechaPedido;
        $this->departamento = $departamento;
        $this->direccionEnvio = $direccionEnvio;
        $this->total = $total;
    }
    

    public function getIdPedido(){
        return $this->idPedido;
       }
      
       public function setIdPedido($idPedido){
        $this->idPedido = $idPedido;
       }
      
       public function getIdcliente(){
        return $this->idcliente;
       }
      
       public function setIdcliente($idcliente){
        $this->idcliente = $idcliente;
       }
      
       public function getEstado(){
        return $this->estado;
       }
      
       public function setEstado($estado){
        $this->estado = $estado;
       }
      
       public function getFechaPedido(){
        return $this->fechaPedido;
       }
      
       public function setFechaPedido($fechaPedido){
        $this->fechaPedido = $fechaPedido;
       }
      
       public function getDepartamento(){
        return $this->departamento;
       }
      
       public function setDepartamento($departamento){
        $this->departamento = $departamento;
       }
      
       public function getDireccionEnvio(){
        return $this->direccionEnvio;
       }
      
       public function setDireccionEnvio($direccionEnvio){
        $this->direccionEnvio = $direccionEnvio;
       }
      
       public function getTotal(){
        return $this->total;
       }
      
       public function setTotal($total){
        $this->total = $total;
       }
}