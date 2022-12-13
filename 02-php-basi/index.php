<?php
// Inserire tante parole all’interno di un array e controllare che la parola passata dall’utente ci sia nell’array.

//creare un array di stringhe
// $parole = [
//   'boolean',
//   'code',
//   'javascript',
//   'php'
// ];

// $parolaDaCercare = $_GET['parola'];

//controllare se è presente la parola nell'array

// if( in_array($parolaDaCercare, $parole) ){
//   echo "la parola è nell'array";
// } else {
//   echo "Non c'è la parola";
// }
?>

<?php
//------------------------------------------------------------------------------------------------------------//

//Controllare che la mail  passata in GET sia ben formata e contenga un punto e una chiocciola. Se è corretta stampare un div che contenga “OK”, altrimenti che contenga “KO”.

$emailUrl = $_GET['email'];

echo strpos($emailUrl, '@');
echo "<br/>";
echo strpos($emailUrl, '.');
?>
<!-- controllo nella condizione se esiste la @ o il . -->

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

  <?php if( strpos($emailUrl, '@') !== false && strpos( $emailUrl, '.' ) !== false ){ ?>
    <div>
      <?php echo 'ok'; ?>
    </div>
    <?php } else { ?>
    <div>
      <?php echo 'ko'; ?>
    </div>
  <?php } ?>

  <!-- Bootstrap 5 script -->
  <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'
    integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin='anonymous'>
  </script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js'
    integrity='sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk' crossorigin='anonymous'>
  </script>
  <!-- vue 2 -->
  <script src='https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js'></script>
  <!-- axios 1.1.3 -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js'
    integrity='sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg=='
    crossorigin='anonymous' referrerpolicy='no-referrer'></script>
  <!-- Mio script -->
  <script src='./main.js'></script>
</body>

</html>
