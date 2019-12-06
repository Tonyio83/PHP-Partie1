<?php
  $part = 'Partie 1';
  $page = 'Exercice 2';
  $lastname = 'Francelle ';
  $firstname = 'Anthony ';
  $age = 36;
  include '../header.php';
?>
  <p class="text-center" style="font-size: 25px"><?= $lastname . ' ' . $firstname . ' ' . $age . ' ans' ?></p>
<?php include '../footer.php' ?>
