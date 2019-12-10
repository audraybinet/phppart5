<?php
$page = 'Exercice 8';
$months = ['janvier', 'février', 'mars', 'avril', 'mai','juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
include '../header.php';
?>
<p>
  <?php
  for ($i=0; $i < sizeof($months); $i++) {
    echo $months[$i];
    ?>
    <br>
    <?php
  }
  ?>
</p>
<?php include '../footer.php'; ?>
