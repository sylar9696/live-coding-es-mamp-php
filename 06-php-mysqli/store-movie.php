<?php
if( $_SERVER['REQUEST_METHOD'] !== 'post' ){
  http_response_code(401);
}

$title = $_POST['titolo'] ?? false;

if(!$titolo){
  http_response_code(400);
}

define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "movies_db");
define("DB_PORT", 8889);

$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

// var_dump($conn);

if( $conn && $conn->connect_error ){
  echo "Connessione fallita " .  $conn->connect_error;
} else {
  echo "Connessione andata a buon fine";
}

$sql = $conn->prepare("INSERT INTO movies (titolo) VALUES (?)");
$sql->bind_param('s', $title);

$result = $sql->execute();

$conn->close();

if($result){
  header('location: index.php');
} else{
  http_response_code(500);
}

?>
