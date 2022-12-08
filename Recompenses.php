
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

            $all_recomp = "SELECT * FROM recompense" ;
            $table = $connection->query($all_recomp);
            $ligne = $table->fetch();

             foreach($ligne as $key=>$ligne): ?>
            <tr>
                <td><?= $ligne ; echo '<br>'  ?></td>
            </tr>
        <?php endforeach; ?>
    </body>
    </html>

 
     <div class="layout">
                <a href="detail_recomp">
                <div class="recompense">
                    <div class="icon">
                        <img src="
                        <?php 
                       require "connection.php"; 
                       $request_img = 'SELECT imageRecompense FROM recompense WHERE idRecompense = 1'; 
                       $table = $connection->query($request_img);
                       while ($ligne = $table->fetch()) {   
                            $i = 0;  
                            echo $ligne[$i] ;
                            $i++;
                        } 
                        ?>"alt="icon ticket">
                    </div>
                    <div class="point">
                        <p><?php 
                        require "connection.php"; 
                        $request_point = 'SELECT coutRecompense FROM recompense WHERE idRecompense = 1'; 
                        $table = $connection->query($request_point);
                        while ($ligne = $table->fetch()) {   
                            $i = 0;  
                            echo $ligne[$i] ;
                            $i++;
                        } 
                        ?> points</p>
                    </div>
                </div>
                </a>
                <div class="nom">
                    <p><?php 
                        require "connection.php"; 
                        $request_nom = 'SELECT nomRecompense FROM recompense WHERE idRecompense = 1'; 
                        $table = $connection->query($request_nom);
                        while ($ligne = $table->fetch()) {   
                            $i = 0;  
                            echo $ligne[$i] ;
                            $i++;
                        } 
                        ?></p>
                </div>
            </div>
