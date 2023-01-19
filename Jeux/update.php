<?php
include './connection.php';

// $console = $_GET['console'];
// // echo $console;
$nom = $_POST['nom'];
$console = $_POST['console'];
$id = $_POST['id'];


$statement = $pdo->prepare("UPDATE `mes_jeux` SET `nom`= :n, `console` = :c where `id` = $id");
$statement->bindParam(':n', $nom, PDO::PARAM_STR);
$statement->bindParam(':c', $console, PDO::PARAM_STR);
$result = $statement->execute();
$number = $pdo->lastInsertId();

if ($result) {
    echo "Le jeux number " . $number . ' a ete change ';
} else {
    echo "Error";
}
