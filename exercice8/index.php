<?php
  $part = 'Partie 1';
  $page = 'Exercice 8';//déclaration d'une variable
  $firstNumber = 3 + 4; //déclaration d'une variable qui donne la somme des 2 nombres
  $secondNumber = 5 * 20; //déclaration d'une variable qui donne la somme des 2 nombres
  $thirdNumber = 45 / 5; //déclaration d'une variable qui donne la somme des 2 nombres
  include '../header.php';//inclus le header et la navbar
?>
<p class="text-center mt-5" style="font-size: 25px">
  <!-- begin of php -->
  <?= 'Les résultats sont '.$firstNumber.', '.$secondNumber.' et '.$thirdNumber.'.'// affiche les résultats des variables?>
  <!-- end of php -->
</p>
<? include '../footer.php'//inclus le footer?>
