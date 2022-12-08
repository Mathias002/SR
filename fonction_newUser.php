<?php
session_start();
require 'sqlconnect.php';

$username = $_REQUEST['username'];
$mail = $_REQUEST['mail'];
$password = $_REQUEST['password'];

$count=1;

//vérifie si l'username est unique
$verifyUnique = $connection->prepare("SELECT * FROM utilisateur WHERE username= ?");
$verifyUnique->bindparam(1, $username, PDO::PARAM_STR);
$verifyUnique->execute();
$count = $verifyUnique->rowCount();

if ($count == 0){
    $passHashed = strtoupper(sha1(sha1($password, true)));
    $password = '*' . $passHashed;

    //on envoie
    $reponse = $connection->prepare("INSERT INTO utilisateur
                                    (username, password, mail, pointsPossedes)
                                    VALUES (?,?,?,0)");

    $reponse->bindparam(1, $username, PDO::PARAM_STR);
    $reponse->bindparam(2, $password, PDO::PARAM_STR);
    $reponse->bindparam(3, $mail, PDO::PARAM_STR);
    

    if ($reponse->execute()){
        header('Location: index.php');
    } else {
        header('Location: inscription.php?error=1');
    } 
} else {
    header('Location: inscription.php?error=2'); //s'il y a déjà quelqu'un avec l'username choisi
}
?>