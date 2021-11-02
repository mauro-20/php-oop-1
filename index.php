<!-- create un file index.php in cui:
- è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
require_once __DIR__ . "/classes/Movie.php";

$matrix = new Movie('Matrix', 1999, ['Keanu Reeves', 'Carrie-Anne Moss', 'Laurence Fishburne'], 'Lana Wachowski', 'Sci-fi', 136);
$jurassicPark = new Movie('Jurassic Park', 1993, ['Jeff Goldblum', 'Laura Dem', 'Sam Neil', 'Ariana Richards'], 'Steven Spielberg', 'Sci-fi Adventure', 128)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>
</head>

<body>
  <h1>Movies</h1>
  <ul>
    <li>
      <h2><?= $matrix->getTitle() ?></h2>
      <p><strong>Year: </strong><?= $matrix->getYear() ?></p>
      <p><?= $matrix->getRuntime() ?> min</p>
      <p>
        <strong>Cast: </strong>
        <?php foreach ($matrix->getCast() as $actor) {
          echo $actor . " ";
        } ?>
      </p>
      <p><strong>Director: </strong><?= $matrix->getDirector() ?></p>
      <p><strong>Genre: </strong><?= $matrix->getGenre() ?></p>
    </li>
    <li>
      <h2><?= $jurassicPark->getTitle() ?></h2>
      <p><strong>Year: </strong><?= $jurassicPark->getYear() ?></p>
      <p><?= $jurassicPark->getRuntime() ?> min</p>
      <p>
        <strong>Cast: </strong>
        <?php foreach ($jurassicPark->getCast() as $actor) {
          echo $actor . " ";
        } ?>
      </p>
      <p><strong>Director: </strong><?= $jurassicPark->getDirector() ?></p>
      <p><strong>Genre: </strong><?= $jurassicPark->getGenre() ?></p>
    </li>
  </ul>


</body>

</html>