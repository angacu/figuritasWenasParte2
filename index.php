<?php
  include "./lib/cuadrado.php";
    include "./lib/triangulo.php";
      include "./lib/circulito.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Primera Clase</title>
  </head>
  <body>
    <?php
      // figura cuadrado
      echo "<b>Cuadrado</b>";
      echo "<br>";
      $figura1= new Cuadrado (4);
      $figura1->setLado(4);
      $totalLados=$figura1->getLado();
      echo "Los lados son igual a = ".$totalLados;
      echo "<br>";
      $totalArea=$figura1->calcularArea();
      echo "El area es igual a = ".$totalArea;
      echo "<br>";
      $totalPerimetro=$figura1->calcularPerimetro();
      echo "El perimetro es igual a = ".$totalPerimetro;
      echo "<br>";
      echo "<br>";

      // figura triangulo
      echo "<b>Triangulo</b>";
      $figura2= new Triangulo (0,0);
      $figura2->setBase(5.2);
      $figura2->setAltura(3);
      $devolverAltura=$figura2->getAltura();
      $devolverBase=$figura2->getBase();
      $totalAreaTriangulo=$figura2->calcularAreaTriangulo();
      $totalPerimetro=$figura2->calcularPerimetroTriangulo();
      echo "<br>";
      echo "La base es igual a = ".$devolverBase;
      echo "<br>";
      echo "La altura es igual a = ".$devolverAltura;
      echo "<br>";
      echo "El area es igual a = ".$totalAreaTriangulo;
      echo "<br>";
      echo "El perimetro es igual a = ".$totalPerimetro;
      echo "<br>";
      // figura triangulo
      echo "<br>";
      echo "<b>Circulo</b>";
      $figura3= new Circulito (0,0);
      $figura3->setRadio(3);
      $devolverRadio=$figura3->getRadio();
      $totalAreaCirculo=$figura3->calcularAreaCirculo();
      $totalPerimetro=$figura3->calcularPerimetroCirculo();
      echo "<br>";
      echo "El radio es igual a = ".$devolverRadio;
      echo "<br>";
      echo "El area es igual a = ".$totalAreaCirculo;
      echo "<br>";
      echo "El perimetro es igual a = ".$totalPerimetro;
    ?>
  </body>
</html>
