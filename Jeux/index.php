<?php

// Instancie l'objet PDO
include "connection.php";


$statement = $pdo->query("SELECT * FROM `mes_jeux`");
// Récupère le résultat
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
// fetch(PDO::FETCH_ASSOC);


// Afichage de array

// echo "Ma liste de jeux video: " . '<br>';
// foreach ($result as $key) {
//     $id = $key['id'];
//     // var_dump($id);

//     echo "- " . ucwords($key["nom"])  . " sur la console " . $key['console'] . "<br>" . '<a href="showOne.php?id=' .  $id . ' ">Voir ce jeu en détail</a>' . "<br>";
//     echo '<a href="form_update.php?id=' .  $id . ' ">Update info</a>' . "<br>" . "<br>";

// }
?>
<p> liste de jeux video:</p><br>
<?php
foreach ($result as $key) {
    $id = $key['id'];
?>

    <p> <?= ucwords($key["nom"]) ?> sur la console <?= $key['console'] ?>
        <br>
        <a href="showOne.php?id=<?= $id ?>">Voir ce jeu en détail</a>
        <br>
        <a href="form_update.php?id=<?= $id ?>">Update info</a>
        <br>
        <a href="delete.php?id=<?= $key['id'] ?>">Supprimer</a>
    <?php
}
    ?>



    <a href="byConsole.php?console=ps4">Tous les jeux PS4</a><br>
    <a href="byConsole.php?console=switch">Tous les jeux switch</a><br>
    <a href="byConsole.php?console=pc">Tous les jeux pc</a><br>
    <a href="byConsole.php?console=xbox">Tous les jeux xbox</a><br>
    <br>



    <h1> Insertion d"un nouveau jeu
        <h1 />
        <form action="form_insert.php" method="POST">
            <label for="nom">Nom : </label>
            <input type="text" name="nom" />
            <br />
            <label for="n_console">Nom de la console : </label>
            <input type="text" name="n_console" /><br />
            <input type="submit" name="ok" value="OK" />
        </form>


        <!-- 
    //  var_dump("SELECT * FROM `mes_jeux` WHERE id = " . $key['console']);

    // var_dump("SELECT * FROM `mes_jeux` WHERE id = " . $id);
    // Observons le résultat
    // var_dump($result);


    // echo gettype($result);



    // Quel mode permet d’obtenir un objet ? Quelle est la classe de cet objet ? =>>>>>>>>>>>> PDO::FETCH_OBJ; type: array

    // - Que se passe-t-il ? ===>>>>>>>>>il a recupere tour les lignes en double
    // - Quel est le type de $result dans ce cas========>>>>>>>>>> une array
    // - Quelle méthode est la plus adaptée à la requête, pourquoi ? ========>>>>> fetchall(PDO::FETCH_ASSOC) car il inviter des doublons mais afficher tout les donnes -->