<?php
// stampa la stringa in pagina
// echo( 'ciao' );
$nome = 'Alex';
$anni = 26;

//Attributi utilizzabili durante il richiamo del file index.php da terminale
// Lanciamo da terminale il comando: php index.php valoreAttributo
// $name1 = $argv[1];

// echo 'ciao ' . $name1;

//richiamo parametro nell'url
$nomeCane = $_GET['nomeCane'];


$stringa = 'lorem ipsum, dolor malet';





?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Boolzap-1</title>
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

  <h1 class="text-primary">
    ciao sono: <?php echo $nome ?> ho <?php echo $anni ?> anni
  </h1>

  <form action="" method="GET">
    <div>
      <label for="nomeCname">Nome</label>
      <input type="text" name="nomeCane" id="nomeCname">
    </div>

    <button type="submit">Invio</button>

  </form>

  <h4>
    Il nome del mio cane è: <?php echo $nomeCane ?>
  </h4>

  <pre>
    <?php var_dump( explode(',', $stringa) ); ?>
  </pre>

  <h4>
    <?php echo str_replace('malet', 'ciaoooooo', $stringa); ?>
    la lunghezza della stringa è: <?php echo strlen($stringa) ?>
  </h4>




  <!-- Bootstrap 5 script -->
  <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'
    integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin='anonymous'>
  </script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js'
    integrity='sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk' crossorigin='anonymous'>
  </script>
  <!-- vue 2 -->
  <!-- <script src='https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js'></script> -->
  <!-- axios 1.1.3 -->
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js'
    integrity='sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg=='
    crossorigin='anonymous' referrerpolicy='no-referrer'></script> -->
  <!-- Mio script -->
  <script src='./main.js'></script>
</body>

</html>
