<!-- CONNECTE L'UTILISATEUR -->

<!-- ENREGISTRE DES DONNEES DANS LES VARIABLES DE SESSION SUIVANTES :
        $_SESSION['idUser']    : l'id de l'utilisateur 
        $_SESSION['nameUser']  : le nom de l'utilisateur
-->

<?php

//prépare la requête
$reponse = $connection->prepare("SELECT * FROM utilisateur WHERE username=? AND password=?");
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$passHashed = strtoupper(sha1(sha1($password, true)));
$password = '*' . $passHashed;

$reponse->bindparam(1, $username, PDO::PARAM_STR);
$reponse->bindparam(2, $password, PDO::PARAM_STR);
$reponse->execute();
$resultat = $reponse->fetch();


if (!empty($resultat)) {
    $_SESSION['idUser'] = $resultat["idUtilisateur"]; //entre dans une variable de session l'ID
    $_SESSION['nameUser'] = $resultat["username"]; //entre dans une variable de session l'ID

    header('Location: index.php');
} else {
    header('Location: connexion.php?error=1'); //si données incorrectes, retour page connexion
}
?>