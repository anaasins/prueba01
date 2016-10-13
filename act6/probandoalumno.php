<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando la clase alumno</title>
  </head>
  <body>
    <?php
        //incluimos la clase alumno que hemos creado
        include 'clasealumno.php';

        //probamos los atributos

        $alumno1 = new claseAlumno();


        $alumno1->setNombre('Ana');
        echo "El nombre del alumno es " .$alumno1->getNombre();

        $alumno1->setEdad(14);
        echo "</br> Su edad es " .$alumno1->getEdad();

        $alumno1->setCurso(5);
        echo "</br> Esta en el curso " .$alumno1->getCurso();

        $alumno1->setCiclo('DAW');
        echo "</br> Cursando el ciclo " .$alumno1->getCiclo();
     ?>
  </body>
</html>
