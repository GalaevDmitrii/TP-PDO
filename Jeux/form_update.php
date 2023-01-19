<?php
include './connection.php';
$nom = "Mario";
$console = "switch";
$id = $_GET['id'];

$statement = $pdo->query("SELECT * FROM `mes_jeux` WHERE id =" . $id);
// Récupère le résultat
$result = $statement->fetch(PDO::FETCH_ASSOC);
$nom = $result['nom'];
$conbsole = $result['console'];
// Affichage
?>


<h1>Modification d un ancien jeu</h1>
<form action="update.php" method="post">
    <label for="nom">Nom: </label>
    <input type="text" name="nom" value=" <?= $nom; ?>">
    <label for="console">Console: </label>
    <input type="text" name="console" value=" <?= $console; ?>">
    <input type="submit" value="OK">
    <input type="text" name="id" value="<?= $id; ?>" hidden>


</form>