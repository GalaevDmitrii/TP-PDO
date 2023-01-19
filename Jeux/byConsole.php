<?php
include './connection.php';

$console = $_GET['console'];
// echo $console;

$statement = $pdo->query("SELECT nom FROM `mes_jeux` WHERE console = " . "'" . $console . "'" . "ORDER BY nom DESC");
// var_dump($statement);

// Récupère le résultat
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);
// Affichage
echo "List les jeux: " . "<br>";
foreach ($result as $key) {
    echo "- " . $key['nom'] . "<br>";
}
