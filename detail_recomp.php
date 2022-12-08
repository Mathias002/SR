
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="style_Detail_Recompenses">
    <title>Détail Récompense</title>
</head>
    <body>

        <?php 
            require "connection.php" ;

            $i = $_GET['param'];

            $sql=$connection->query("SELECT * FROM `recompense` WHERE `idRecompense` = ".$i." ") ;
            
            $ligne = $sql->fetchall();

            foreach($ligne as $value){
            ?>
                <div class="layout">
                    <a href="detail_recomp">
                        <div class="recompense">

                            <div class="icon">
                                <?php   
                                    echo '<img src="'.$value['imageRecompense'].'" alt="icon ticket">' ;
                                ?>
                            </div>

                            <div class="point">
                                <p>
                                    <?php  
                                    echo $value['coutRecompense'] ;
                                    ?>points
                                </p>
                            </div>

                        </div>
                    </a>

                        <div class="nom">
                            <p><?php    
                                    echo $value['nomRecompense'] ; 
                                ?></p>
                        </div>

                </div>
            <?php
            $i ++ ;
            }
        ?>
        <button type="submit"><a href="Recompenses.php">Retourner à la liste des récompenses</a></button>
    </body>
</html>
