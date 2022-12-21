<?php

include_once __DIR__ . '/classi/generi.php';
include_once __DIR__ . '/classi/libro.php';
include_once __DIR__ . '/classi/impiegato.php';
include_once __DIR__ . '/classi/audiolibro.php';


$generi = [
  'giallo' => new Generi('giallo', 'icon-font-awesome-giallo'),
  'horror' => new Generi('horror', 'icon-font-awesome-horror')
];
var_dump( $generi );

$prodotti = [
  new Libro( 'La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 250, 'flessibile' ),
  new audioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com'),
];

//$prodotti[0]->setAnno(2005);

// $libbro1 = new Libro(24, 'flessibile');
// var_dump($libbro1);
// $libbro1->nome = "il signore degli anelli";
// var_dump($libbro1);

var_dump( $prodotti );

$prodotti[0]->getStringCustom();


$impiegato = new Impiegato('Marco', 'Rossi', 3);

var_dump($impiegato);

$impiegato->anno = 1998;

var_dump($impiegato);

$impiegato->getStringCustom();







// foreach( $prodotti as $elem ){
//   echo get_class($elem);
//   echo "<br>";
// }
?>
