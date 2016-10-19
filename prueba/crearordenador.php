<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando la clase ordenador</title>
  </head>
  <body>
    <?php
      //Incluimos el archivo php de la clase Ordenador
      include 'ordenador.php';

      //creamos objetos
      $ordenador1 = new Ordenador();
      $ordenador2 = new Ordenador();

      //Los sacamos por pantalla
      //ordenador1
      $ordenador1->setMarca('apple');
      echo "La marca del primer ordenador es  " .$ordenador1->getMarca();

      $ordenador1->setRam('8');
      echo "<br>La RAM del primer ordenador es " .$ordenador1->getRam();

      //ordenador2
      $ordenador2->setMarca('asus');
      echo "<br>La marca del segundo ordenador es " .$ordenador2->getMarca();

      $ordenador2->setRam('16');
      echo "<br>La RAM del segundo ordenador es " .$ordenador2->getRam();
     ?>
  </body>
</html>
