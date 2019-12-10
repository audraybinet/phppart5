<?php
$page = 'Exercice 1';
$month = ['janvier', 'février', 'mars', 'avril', 'mai','juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
include '../header.php';
var_dump($month);
echo 'mois en cours ' . $month[11];
?>
<?php include '../footer.php'; ?>
