<?php

trait Anno{
  public $anno;

  public function getStringCustom(){
    if( get_class($this) == 'libro' ){
      echo "Il libro $this->nome è stato scritto nel: $this->anno";
    } else if( get_class($this) == 'Impiegato' ){
      echo "L'impiegato $this->nome è stato assunto nel: $this->anno";
    }
  }

}

?>
