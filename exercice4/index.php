<?php
  $part = 'Partie 1';
  $page = 'Exercice 4';
  $name = 'Toto';//déclaration d'une variable string
  $age = 11;//déclaration d'une variable int
  $average = 5.75;//déclaration d'une variable float
  $bool = true;//déclaration d'une variable booléen
  //affiche la concaténation des variables sur ma page web
  include '../header.php';
?>
<p class="text-center" style="font-size: 25px">
  <!-- begin of php -->
  <?= $name.' '.$age. ' ans a une moyenne de '. $average. ' ' .$bool ?>
  <!-- end of php -->
</p>
<? include '../footer.php' ?>
