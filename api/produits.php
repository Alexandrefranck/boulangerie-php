<?php
header("Content-type: application/json; charset=utf-8");
require '../functions.php';


$pdo = pdo_connect_mysql();
$query = $pdo->prepare('SELECT produits.* , categorie.type FROM categorie  join produits  on categorie.id = produits.categorie_id ORDER BY id DESC  ');
$query->execute();
$produits = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($produits);
