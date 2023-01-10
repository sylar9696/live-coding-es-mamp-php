<?php
//Homepage
//includo le info della classe cliente
include_once __DIR__ . '/classi/cliente.php';

//inizializzazione
// $cliente1 = new Cliente();

//ottengo un oggetto di cliente1
// var_dump($cliente1);


//settare dei valori per l'istanza chiamata: cliente1
// $cliente1->name = 'Alex';
// $cliente1->lastname = 'lodigiani';

// var_dump($cliente1);


//Creo un cliente 2 con il costruttore

$cliente2 = new Cliente( 'marco', 'rossi', 20 );

//invoco la funzione isAdult()
echo $cliente2->isAdult();

var_dump( $cliente2 );

//Cliente 3
$cliente3 = new Cliente( 'al', 'Bob', 15 );
echo $cliente3->isAdult();

?>

<!-- Form per creare un cliente -->
<!-- HTML -->

<h1>FORM</h1>

<form method="POST">
  <input type="text" placeholder="name" name="name">
  <input type="text" placeholder="lastname" name="lastname">
  <input type="number" name="age">
  <button >Invia</button>
</form>

<?php
// echo "$name - $lastname - $age";

include_once __DIR__ . '/db/index.php';

//Aggiornamento del form per evitare gli errori e attivare il form solo se estitono dei parametri
if( !empty($_GET) && !empty( $_GET['name'] ) && !empty( $_GET['lastname'] ) && !empty( $_GET['age'] ) ){
  $name = $_GET['name'];
  $lastname = $_GET['lastname'];
  $age = $_GET['age'];

  $cliente4 = new Cliente( $name, $lastname, $age );
  var_dump( $cliente4 );
}

if( !empty($_POST) && !empty( $_POST['name'] ) && !empty( $_POST['lastname'] ) && !empty( $_POST['age'] ) ){
  $name = $_POST['name'];
  $lastname = $_POST['lastname'];
  $age = $_POST['age'];

  // $arrayVuoto[] .= new Cliente( $name, $lastname, $age );

  array_push($db, new Cliente( $name, $lastname, $age ) );

  $_POST['name'] = '';
  $_POST['lastname'] = '';
  $_POST['age'] = '';
}
var_dump( $db );


//array di istanze
// $arrayIstanze = [];

// for( $i = 0; $i < 2; $i++ ){
//   $cliente = new Cliente( 'name', 'lastname', rand(1,100) );
//   $arrayIstanze[] = $cliente;
// }

// var_dump( $arrayIstanze );

?>
