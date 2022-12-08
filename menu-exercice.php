<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
  	<link href="css/menu-exercice.css" rel="stylesheet">
    <title>Exercice</title>
</head>
<body>

    <?php

        $niveau = 1;

        require "connection.php" ;

        $sql = "SELECT imageExercice FROM Exercice WHERE niveau = ".$niveau ;
        $table = $connection->query($sql);
        $image = $ligne['imageExercice'];
        while($ligne = $table->fetch()) {    
            echo  $ligne['imageExercice'].'</br>';
        } 



        /*$sql2 = "SELECT imageExercice FROM Exercice WHERE niveau = ".$niveau ;
        $table2 = $connection->query($sql2);
        $ligne2 = $table2->fetch();
        $image2 = $ligne2['imageExercice'];*/


        
    ?>
    <div>
        <center><img src="<?php echo $image;?>" width="300px"><center>
    <div>

</body>
</html>

<!--
    
        $type=$_REQUEST['type'];
        $chaine=$_REQUEST['chaine'];


        require 'sqlconnect.php';    

        $sqll= 'SELECT COUNT(*) as nb FROM books WHERE '.$type.' LIKE "%'.$chaine.'%"';
        $table = $connection->query($sqll);
        $ligne = $table->fetch();  
        $nb = $ligne['nb'];
            echo 'Nombre de livre(s) trouvé(s) : '.$nb;


        $sql = 'SELECT * FROM books WHERE '.$type.' LIKE "%'.$chaine.'%" ';    
        $table = $connection->query($sql);    
        while($ligne = $table->fetch()) {    
        echo  '<h4>Titre : '.$ligne['title'].'</h4>Autheur : '.$ligne['author'].'</br>'.'ISBN : '.$ligne['isbn'].'</br>'.'Prix : '.$ligne['price'];
        }    

?>
-->