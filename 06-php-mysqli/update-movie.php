<?php
if( $_SERVER['REQUEST_METHOD'] !== 'post' ){
  http_response_code(401);
}

$title = $_POST['titolo'] ?? false;
$id = $_POST['id'] ?? false;

if(!$titolo || !$id || !is_numeric($id)){
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

$sql = $conn->prepare("UPDATE movies SET titolo = ? WHERE id = ?");
$sql->bind_param('si', $title, $id);

$result = $sql->execute();

$conn->close();

if($result){
  header('location: index.php');
} else{
  http_response_code(500);
}

?>
