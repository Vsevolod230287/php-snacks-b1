<!-- Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY
(ad es 31/01/2007) e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post -->

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
  $array_father = [
    '01/02/2009' => [
      'title' => 'Proprio percorso',
      'author'=> 'Vincent Pajero',
      'text' => 'Le carriere artistiche, come dipingere, recitare, scrivere o suonare, richiedono tutte
       lo sviluppo di un proprio percorso di promozione e visibilità. Dovrai essere bravo a vendere te
       stesso in questi ambiti, riuscendo possibilmente a farti un nome e una fama. Se qualcuno che non hai
       mai incontrato prima, conosce il tuo nome, è già un primo piccolo successo verso la gloria.'
    ],
    '01/03/1999' => [
      'title' => 'La persuasione',
      'author'=> 'Diego Alvarez',
      'text' => 'La persuasione è una forza potente nella vita di tutti i giorni e ha una grande influenza
                 sull’intera società. La politica, le decisioni giuridiche, i mass media , le notizie e la
                 pubblicità sono tutti influenzati dal potere che la persuasione instaura e da essi.
                 Anche tu ne sei influenzato.'
    ],
    '01/04/2019' => [
      'title' => 'Il grande Guerriero',
      'author'=> 'Mithoom Chiackroborty',
      'text' => 'Il buon guerriero non è aggressivo, un buon combattente non si lascia prendere dalla Ira.
                 Chi sa vincere non ha bisogno di dar battaglia, chi sa guidare gli esseri umani si mette
                 al loro servizio.'
    ],
    '01/05/1914' => [
      'title' => 'La Mela di Newton',
      'author'=> 'ALbert Einstein',
      'text' => 'Il fatto che il frutto cadesse sempre e soltanto verticalmente infatti,
                 e mai orizzontalmente oppure all’insù, doveva stare per forza a significare
                 l’esistenza di una legge di attrazione della Terra nei confronti di oggetti e
                 persone che la abitano.'
    ],
  ]; ?>

    <div class="post">
    Ttitolo: <?= $array_father['01/02/2009']['title'].'<br>' ?>
    Autore: <?= $array_father['01/02/2009']['author'].'<br>' ?>
    Testo: <?=  $array_father['01/02/2009']['text'].'<br>' ?>
    </div>

    <div class="post">
    Ttitolo: <?= $array_father['01/03/1999']['title'].'<br>' ?>
    Autore: <?= $array_father['01/03/1999']['author'].'<br>' ?>
    Testo: <?=  $array_father['01/03/1999']['text'].'<br>' ?>
    </div>

    <div class="post">
    Ttitolo: <?= $array_father['01/05/1914']['title'].'<br>' ?>
    Autore: <?= $array_father['01/05/1914']['author'].'<br>' ?>
    Testo: <?=  $array_father['01/05/1914']['text'].'<br>' ?>
    </div>

    <div class="post">
    Ttitolo: <?= $array_father['01/04/2019']['title'].'<br>' ?>
    Autore: <?= $array_father['01/04/2019']['author'].'<br>' ?>
    Testo: <?=  $array_father['01/04/2019']['text'].'<br>' ?>
    </div>



</body>
</html>
