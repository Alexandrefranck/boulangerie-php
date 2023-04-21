<?php
header("Content-type: application/json; charset=utf-8");
require '../functions.php';


$query = $pdo->prepare("SELECT * FROM produits where date_sortie >= '2023/03/21'");
$query->execute();
$produits = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($produits);
