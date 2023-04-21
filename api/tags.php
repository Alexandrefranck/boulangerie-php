<?php
header("Content-type: application/json; charset=utf-8");
require '../functions.php';


$query=$pdo->prepare('SELECT * FROM tag');
$query->execute();
$produits = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($produits);
