<?php
  $part = 'Partie 1';
  $page = 'Exercice 3';
  include '../header.php';
?>
  <p class="text-center" style="font-size: 25px">
    <?php
      $km = 1;//déclaration d'une première variable
      echo 'Il a parcouru ' .$km. 'km';//affiche la valeur de la variable
      $km = 3;//change la valeur de la variable
      echo '<br>';
      echo 'Il a parcouru ' .$km. 'km';//affiche la valeur de la variable
      $km = 125;//déclaration d'une variable
      echo '<br>';//change la valeur de la variable
      echo 'Il a parcouru ' .$km. 'km';//affiche la valeur de la variable
    ?>
  </p>
<?php include '../footer.php' ?>
