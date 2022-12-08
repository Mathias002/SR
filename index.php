<!-- CECI EST UNE PAGE JUSTE FAITE POUR TESTER, REMPLACEZ PAR VOTRE PROPRE INDEX -->
<?php

$pageTitle = "Accueil";
include 'nav.php';

if (!empty($_SESSION['idUser'])){
    include 'sqlconnect.php';
    $nameUser = $_SESSION['nameUser'];
    print("<h1>Bienvenue $nameUser</h1><br/><a href='fonction_deconnect.php'>Déconnexion</a>");
} else {
    print("<a href='inscription.php'>Inscription</a><br/><a href='connexion.php'>Connexion</a>");
}

?>