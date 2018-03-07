<?php
/**
 *
 */
class Cuadrado
{
  // propiedades de nuestra clase
    private $lado=4;
  // generamos el construct
  public function __construct($lado){
    $this->lado=$lado;
  }
  // generamos los getters y setters
    public function getLado(){
        return $this->lado;
    }
    public function setLado($lado){
        $this->lado=$lado;
        return $this;
    }
  // funciones
    public function calcularArea(){
      $area=0;
      $area=$this->lado * $this->lado;
      return $area ;
    }
    public function calcularPerimetro(){
      $perimetro=0;
      $perimetro=$this->lado * 4;
      return $perimetro;
    }
}
?>
