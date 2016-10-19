<?php
/**
 * Clase ordenador creada por Ana Asins
 */
class Ordenador
{
  //Propiedades
  public $marca="hp";
  public $ram=4;

  //Getters y setters
  //Marca
  public function setMarca($NuevaMarca){
    $this->marca=$NuevaMarca;
  }
  public function getMarca(){
    return $this->marca;
  }

  //RAM
  public function setRam($NuevaRam){
    $this->ram=$NuevaRam;
  }
  public function getRam(){
    return $this->ram;
  }
}
 ?>
