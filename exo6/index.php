<?php
$page = 'Exercice 6';
include '../header.php';
  $hautsDeFrance = [
    '02' => 'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-de-Calais',
    '80' => 'Somme',
  ];
?>
<?php echo 'J\'habite dans le ' . $hautsDeFrance['59'];  ?>
<?php include '../footer.php'; ?>
