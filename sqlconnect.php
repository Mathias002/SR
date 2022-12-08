<?php
/* CONNECTION AU SERVEUR */
try { 
    $dns = 'mysql:host=localhost;dbname=sport_reward'; //DNS avec 'adresse de la base de données;nom de la base de données' 
    $user = 'root';
    $motDePasse = ''; 
    $connection = new PDO( $dns, $user, $motDePasse ); 
    $connection->query("SET NAMES utf8"); 

} catch ( Exception $e ) { 
    echo "Connection à MySQL impossible : ", $e->getMessage(); 
    die(); 
}

?>