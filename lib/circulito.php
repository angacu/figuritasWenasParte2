<?php
/**
 *
 */
class Circulito
{
  // propiedades de nuestra clase
    private $radio=0;
  // generamos el construct
  public function __construct($radio){
    $this->radio=$radio;
  }
  // generamos los getters y setters
    public function getRadio(){
        return $this->radio;
    }
    public function setRadio($radio){
        $this->radio=$radio;
        return $this;
    }

  // funciones
    public function calcularAreaCirculo(){
      $radio=3;
      $numPi=3.14;
      $area=$this->radio * $numPi;
      return $area ;
    }
    public function calcularPerimetroCirculo(){
      $perimetro=0;
      $numPi=3.14;
      $perimetro=$this->radio * $numPi * $this->radio;
      return $perimetro;
    }
}
?>
