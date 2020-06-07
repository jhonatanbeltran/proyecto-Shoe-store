<?php
class Productopedido{

    private $idPedido;
    private $idProducto;
    private $cantidad;
    private $precioUnitario;
    private $subtotal;

    



	public function __constructor($idPedido,$idProducto,$cantidad,$precioUnitario,$subtotal) { 
        $this->idPedido = $idPedido; 
        $this->idProducto = $idProducto; 
        $this->cantidad = $cantidad; 
        $this->precioUnitario = $precioUnitario; 
        $this->subtotal= $subtotal; 
    }
    
    public function getIdPedido(){
        return $this->idPedido;
       }
      
       public function setIdPedido($idPedido){
        $this->idPedido = $idPedido;
       }
      
       public function getIdProducto(){
        return $this->idProducto;
       }
      
       public function setIdProducto($idProducto){
        $this->idProducto = $idProducto;
       }
      
       public function getCantidad(){
        return $this->cantidad;
       }
      
       public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
       }
      
       public function getPrecioUnitario(){
        return $this->precioUnitario;
       }
      
       public function setPrecioUnitario($precioUnitario){
        $this->precioUnitario = $precioUnitario;
       }
      
       public function getSubtotal(){
        return $this->subtotal;
       }
      
       public function setSubtotal($subtotal){
        $this->subtotal = $subtotal;
       }
}