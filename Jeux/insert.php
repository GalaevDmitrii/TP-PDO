<?php

// Instancie l'objet PDO
include "connection.php";


// "INSERT INTO `mes_jeux`(`nom`, `console`) VALUES ('Skyrim','ps4')";

// $nom = 'Tarkov';
// $console = 'pc';
// $sql = "INSERT INTO `mes_jeux` ( `nom`, `console` )
// VALUES (' " . $nom . " ', ' " . $console . "' );";
// //echo $sql . "<br>";
// $statement = $pdo->query($sql);

$nom = 'Apex';
$console = 'pc';
// Préparation
$statement = $pdo->prepare(
    "INSERT INTO `mes_jeux`(nom, console)
VALUES (:n, :c);"
);
// Correspondre les valeurs
$statement->bindParam(':n', $nom, PDO::PARAM_STR);
$statement->bindParam(':c', $console, PDO::PARAM_STR);
$result = $statement->execute();
var_dump($result);
