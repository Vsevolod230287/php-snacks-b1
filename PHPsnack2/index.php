<!-- Passare come parametri GET name, mail e age e verificare che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="./master.css">
</head>
<body>


<?php
// name deve essere più lungo di 3 caratteri
$name = $_GET['name'];
$str_len = strlen($name);


// che la email contenga un punto e una chiocciola
$dot = '.';
$chiocciola = '@';
$email = $_GET['email'];
$result_filter = filter_var($email, FILTER_VALIDATE_EMAIL);
$email_dot = strpos( $email , $dot);
$email_chiocciola = strpos( $email , $chiocciola);

// che age sia un numero.
$age = $_GET['age'];
$is_num = is_numeric($age);



if( $str_len < 3 ||
    $email_dot === false ||
    $email_chiocciola === false ||
    $result_filter === false ) { ?>

      <div class="">
         Accesso negato
      </div>
    <?php } else { ?>
      <div class="">
        Accesso riuscito
      </div>
    <?php } ?>
</body>
</html>
