<?php

/**
 *
 */
class Triangulo
{
  // propiedades de nuestra clase
    private $base=0;
    private $altura=0;
  // generamos el construct
  public function __construct($base,$altura){
    $this->base=$base;
    $this->altura=$altura;
  }
  // generamos los getters y setters
    public function getBase(){
        return $this->base;
    }
    public function setBase($base){
        $this->base=$base;
        return $this;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($altura){
        $this->altura=$altura;
        return $this;
    }
  // funciones
    public function calcularAreaTriangulo(){
      $altura=0;
      $base=0;
      $area=$this->base * $this->altura / 2;
      return $area ;
    }
    public function calcularPerimetroTriangulo(){
      $perimetro=0;
      $perimetro=$this->base * 4;
      return $perimetro;
    }
}
?>
