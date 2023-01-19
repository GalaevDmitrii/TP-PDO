<?php
include './connection.php';

// $console = $_GET['console'];
// // echo $console;
$id = $_GET['id'];


$statement = $pdo->prepare("DELETE  FROM `mes_jeux` where `id` = $id");
$result = $statement->execute();
$number = $pdo->lastInsertId();

if ($result) {
    echo "Le jeux number " . $number . ' a ete SUPPRIME ';
} else {
    echo "Error";
}
