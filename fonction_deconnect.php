<!-- PAGE DE DECONNEXION -->

<?php
session_start();

//détruit les variables de session pour déconnecter
session_destroy();

//retourne à l'accueil
header('Location: index.php');
?>