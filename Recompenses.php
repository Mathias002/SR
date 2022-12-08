
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="style_Recompenses">
    <title>Récompenses</title>
</head>
    <body>

        <?php 
            require "connection.php" ;
            $i = 1 ;
            $sql=$connection->query("SELECT * FROM `recompense`") ;
            
            $ligne = $sql->fetchall();

            foreach($ligne as $value){
            ?>
                <div class="layout">
                    <a href="detail_recomp.php?param=<?php echo $i;?>">
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
                                ?>
                            </p>
                        </div>

                </div>
            <?php
            $i ++ ;
            }
        ?>
    </body>
</html>
