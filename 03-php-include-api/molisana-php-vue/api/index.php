<?php
include_once __DIR__ . '/../db/index.php';
//C:\MAMP\htdocs\#77\live-coding-es-mamp-php\03-php-include-api\molisana-php-vue\api + /../db/index.php

// var_dump( __DIR__ );

//array che conterrà solo i prodotti che corrispondono al filtraggio tramite parametri dati dal ciclo
//http://localhost:8888/%2377/live-coding-es-mamp-php/03-php-include-api/molisana-php-vue/api?tipo=lunga
//solo gli elementi che hanno il "tipo" = ?tipo=lunga
$arrayFiltrato = [];

//chiede all'url se c'è un parametro definito e se c'è un parametro tipo con del valore all'interno
if( !empty($_GET) && !empty($_GET['tipo'] ) ){

  foreach( $products as $elem ){
    // var_dump( $_GET['tipo'] );
    if( $elem['tipo'] == $_GET['tipo'] ){
      //se il tipo del prodotto corrisponde al tipo scritto nel parametro url "tipo" pusho l'elemento dell'array filtrato
      $arrayFiltrato[] = $elem;
    }
  }

  //Se non c'è nessun parametro nell'url e se ci sono sono vuoti
} else {
  //associazione dell'array filtrato con l'intero array di elementi
      $arrayFiltrato = $products;
}

// var_dump( $arrayFiltrato );

header('Content-type: application/json');

echo json_encode( $arrayFiltrato );

?>
