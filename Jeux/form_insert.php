<?php
include './connection.php';

// $console = $_GET['console'];
// // echo $console;
$nom = $_POST['nom'];
$console = $_POST['n_console'];


$statement = $pdo->prepare("INSERT INTO `mes_jeux`  (nom, console)
 VALUES ( :n , :c)");
$statement->bindParam(':n', $nom, PDO::PARAM_STR);
$statement->bindParam(':c', $console, PDO::PARAM_STR);
$result = $statement->execute();
$number = $pdo->lastInsertId();

if ($result) {
    echo "Le jeux number " . $number . ' a ete cree ';
} else {
    echo "Error";
}
// var_dump($statement);
// "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";