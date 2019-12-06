<?php
  $part = 'Partie 1';
  $page = 'Exercice 7';
  $lastname = 'Caron'; //déclaration d'une variable
  $firstname = 'Francis'; //déclaration d'une variable
  $age = 53; //déclaration d'une variable
  include '../header.php';
?>
<p class="text-center" style="font-size: 25px">
  <!-- begin of php -->
  <?= 'Bonjour '.$firstname.' '.$lastname. ' tu as '.$age.' ans'// affiche le texte et la valeur des variables sur la page html?>
  <!-- end of php -->
</p>
<?php include '../footer.php' ?>
