<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno -->

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
  $alluni = [
    [
      'nome'=> 'Vsevolod',
      'Cognome'=> 'Cerneavschi',
      'Voti' => ['8','7','9']
    ],
    [
      'nome'=> 'Gari ',
      'Cognome'=> 'Kasparov',
      'Voti' => ['6','7','8']
    ],
    [
      'nome'=> 'Donald',
      'Cognome'=> 'Trump',
      'Voti' => [ '9', '7', '8'  ]
    ]

 ];
for($i = 0; $i < count($alluni); $i++) { ?>
  <div class="">
    <?php echo 'Nome: ' . $alluni[$i]['nome'] . '<br>';
          echo 'Cognome: ' . $alluni[$i]['Cognome'] . '<br>';

    $alluno_voti = $alluni[$i]['Voti'];

     $somma = 0;

  for($j = 0; $j < count($alluno_voti); $j++) {

    $somma += $alluno_voti[$j];

    if($j == count($alluno_voti)-1) {

      $media_voti = $somma / count($alluno_voti);
      
      echo 'Media dei voti: ' . $media_voti . '<br>';
    }
  };?>

</div>

 <?php
}
?>







</body>
</html>
