<?php
//Array multidimensionale
$studenti = [
  [
    'nome' => 'marco',
    'cognome' => 'rossi'
  ],
  [
    'nome' => 'alex',
    'cognome' => 'pinco'
  ],
  [
    'nome' => 'stella',
    'cognome' => 'pallino'
  ],
];

//vogliamo stampare esempio: marco - rossi

for( $i = 0; $i < count( $studenti ); $i++ ){
  //in javascript studenti[i].nome
  echo $studenti[$i]['nome'] . '-' . $studenti[$i]['cognome'];
  echo "<br>";
}

?>
