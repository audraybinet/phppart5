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
$departements['51'] = 'Marne';
print_r($departements);
?>
<?php include '../footer.php'; ?>
