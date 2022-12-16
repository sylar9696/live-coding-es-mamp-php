<?php
class Cliente{
  //Scrivo gli attributi della classe
  public $name;
  public $lastname;

  public $age;

  //costruttore
  function __construct( $_x, $_y, $_z ){
    $this->name = $_x;
    $this->lastname = $_y;
    $this->age = $_z;
  }


  //Funzione custom da abbinare a ogni istanza
  public function isAdult(){
    if( $this->age > 18 ){
      return "l'utente $this->name - $this->lastname è maggiorenne";
    } else {
      return "l'utente $this->name - $this->lastname è minorenne";
    }
  }

}




?>
