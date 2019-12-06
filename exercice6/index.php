<?php
  $part = 'Partie 1';
  $page = 'Exercice 6';
  $name = 'Amadou';//déclaration d'une variable
  include '../header.php';
?>
<p class="text-center" style="font-size: 25px">
  <!-- begin of php -->
  <?= 'Bonjour ' .$name. ', comment vas-tu ?'// affiche un texte et la variable sur la page web?>
  <!-- end of php -->
</p>
<?php include '../footer.php' ?>
