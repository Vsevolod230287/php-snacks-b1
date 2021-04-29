

  <?php
  $tappa = [
    [
     'squadra_casa' => 'Milan',
     'squadra_ospite' => 'Napoli',
     'punteggio_casa' => '3',
     'punteggio_ospite' => '5'],
    [
     'squadra_casa' => 'Juve',
     'squadra_ospite' => 'Roma',
     'punteggio_casa' => '2',
     'punteggio_ospite' => '1'],
    [
     'squadra_casa' => 'Lazio',
     'squadra_ospite' => 'Fiorentina',
     'punteggio_casa' => '1',
     'punteggio_ospite' => '0']
  ];


  for($i = 0; $i < count($tappa); $i++ ){  ?>
    <div class="">
    <?= $tappa[$i]['squadra_casa'] ?> -
    <?= $tappa[$i]['squadra_ospite'] ?> |
    <?= $tappa[$i]['punteggio_casa'] ?> -
    <?= $tappa[$i]['punteggio_ospite'] ?>
    </div>
  <?php  } ?>
