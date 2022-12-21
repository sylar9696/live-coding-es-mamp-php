<?php

include_once __DIR__ . '/../trait/anno.php';

class Impiegato{

  public $nome;
  public $cognome;
  public $livello;

  //Trait
  use Anno;

  public function __construct($nome, $cognome, $livello)
  {
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->livello = $livello;
  }

}
?>
