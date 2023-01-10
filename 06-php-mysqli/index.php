<?php
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

$sql = "SELECT * FROM `movies`";
$result = $conn->query($sql);

var_dump($result);

$movies_array = [];

if( $result && $result->num_rows > 0 ){

  while( $row = $result->fetch_assoc() ){
    $movies_array[] = $row;
  }

} else if( $result ){
  echo "tabella richiesta vuota";
} else {
  echo "query error";
}

var_dump($movies_array);

?>


<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Movies</title>
  <!-- FontAwesome 6.2 -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
    integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
    crossorigin='anonymous' referrerpolicy='no-referrer' />
  <!-- Bootstrap 5.2 css -->
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
    integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
  <link rel='stylesheet' href='./style.css'>
</head>

<body>

  <div class="container">
    <h1>Movies</h1>
    <a href="create-movie.php" class="btn btn-success">
      Crea film
    </a>
    <!-- tabella -->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">titolo</th>
          <th scope="col">Azioni</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach( $movies_array as $elem ){ ?>
            <tr>
              <td>
                <?php echo $elem['id'] ?>
              </td>
              <td>
                <?php echo $elem['titolo'] ?>
              </td>
              <td>
                <a href="edit-movie.php?id=<?php echo $elem['id'] ?>" class="btn btn-warning">
                  <i class="fa-solid fa-pen"></i>
                </a>
                <!-- icona cestino -->
              </td>
            </tr>
          <?php } ?>
      </tbody>
    </table>
  </div>



  <!-- Bootstrap 5 script -->
  <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'
    integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin='anonymous'>
  </script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js'
    integrity='sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk' crossorigin='anonymous'>
  </script>
  <!-- Mio script -->
  <script src='./main.js'></script>
</body>

</html>
