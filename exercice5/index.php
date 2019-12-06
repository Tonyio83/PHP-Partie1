<?php
  $part = 'Partie 1';
  $page = 'Exercice 5';
  $varInt = null;//déclaration d'une variable vide
  include '../header.php';
?>
<p class="text-center" style="font-size: 25px">
  <!-- begin of php -->
  <?php
    echo 'la valeur de int est ' . $varInt . '<br>';//affiche la variable sur la page web
    $varInt = 2;//change la valeur de la variable int
    echo 'la valeur de int est ' . $varInt;//affiche la variable sur la page web
  ?>
  <!-- end of php -->
</p>
<? include '../footer.php' ?>
