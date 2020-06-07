<?php

class Producto{

    private $IdProducto:
    private $tipoproducto;
    private $marca;
    private $material;
    private $color;
    private $talla;
    private $precio;
    private $cantidad;
    private $imagen;

    



	public function __constructor($IdProducto,$tipoproducto,$marca,$material,$color,$talla,$precio,$cantidad, $imagen) { 
        $this->IdProducto = $IdProducto; 
        $this->tipoproducto = $tipoproducto; 
        $this->marca = $marca; 
        $this->material = $material; 
        $this->color = $color; 
        $this->talla= $talla; 
        $this->precio = $precio; 
        $this->cantidad = $cantidad; 
        $this->imagen =  $imagen; 
    }
    
    public function getTipoproducto(){
        return $this->tipoproducto;
       }
      
       public function setTipoproducto($tipoproducto){
        $this->tipoproducto = $tipoproducto;
       }
      
       public function getMarca(){
        return $this->marca;
       }
      
       public function setMarca($marca){
        $this->marca = $marca;
       }
      
       public function getMaterial(){
        return $this->material;
       }
      
       public function setMaterial($material){
        $this->material = $material;
       }
      
       public function getColor(){
        return $this->color;
       }
      
       public function setColor($color){
        $this->color = $color;
       }
      
       public function getTalla(){
        return $this->talla;
       }
      
       public function setTalla($talla){
        $this->talla = $talla;
       }
      
       public function getPrecio(){
        return $this->precio;
       }
      
       public function setPrecio($precio){
        $this->precio = $precio;
       }
      
       public function getCantidad(){
        return $this->cantidad;
       }
      
       public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
       }
      
       public function getImagen(){
        return $this->imagen;
       }
      
       public function setImagen($imagen){
        $this->imagen = $imagen;
       }
}