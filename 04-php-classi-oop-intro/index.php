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

<form method="GET">
  <input type="text" placeholder="name" name="name">
  <input type="text" placeholder="lastname" name="lastname">
  <input type="number" name="age">
  <button >Invia</button>
</form>

<?php
$name = $_GET['name'];
$lastname = $_GET['lastname'];
$age = $_GET['age'];

// echo "$name - $lastname - $age";
$cliente4 = new Cliente( $name, $lastname, $age );
var_dump( $cliente4 );


//array di istanze
$arrayIstanze = [];

for( $i = 0; $i < 2; $i++ ){
  $cliente = new Cliente( 'name', 'lastname', rand(1,100) );
  $arrayIstanze[] = $cliente;
}

var_dump( $arrayIstanze );

?>
