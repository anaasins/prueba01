<?php
/**
 * Clase de un Alumno creada por Ana Asins para la actividad 6
 */
class claseAlumno
{
  //Declaracion de los atributos
    public $Nombre ='';
    public $Edad ='';
    public $Curso ='';
    public $Ciclo ='';

  //Creacion de los getters y los setters

  //nombre
  public function setNombre($nuevoNombre){
    $this->Nombre=$nuevoNombre;
  }

  public function getNombre(){
    return $this->Nombre;
  }

  //Edad
  public function setEdad($nuevaEdad){
    if ($nuevaEdad<18) {
      $this->Edad=18;
    }else{
      $this->Edad=$nuevaEdad;
    }
  }

  public function getEdad(){
    return $this->Edad;
  }

  //Curso
  public function setCurso($nuevoCurso){
    if ($nuevoCurso=1) {
      $this->Curso=$nuevoCurso;
    }elseif ($nuevoCurso=2) {
      $this->Curso=$nuevoCurso;
    }else {
      $this->Curso=1;
    }
  }

  public function getCurso(){
    return $this->Curso;
  }

  //Ciclo
  public function setCiclo($nuevoCiclo){
    $this->Ciclo=$nuevoCiclo;
  }

  public function getCiclo(){
    return $this->Ciclo;
  }

}

 ?>
