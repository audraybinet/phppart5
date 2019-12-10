<?php
$page = 'Exercice 7';
include '../header.php';
  $departements = [
    '02' => 'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-de-Calais',
    '80' => 'Somme',
  ];
  ?>
  <p>
      <?php
        foreach ($departements as $key => $value) {
          echo $departements[$key];
      ?>
        <br>
      <?php
        }
      ?>
    </p>

<?php include '../footer.php'; ?>
