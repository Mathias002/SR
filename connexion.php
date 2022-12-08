<?php
$pageTitle = "Connexion";
session_start();
//include 'nav.php'; //C'était pour inclure le nav

// Redirection vers l'index si l'utilisateur est déjà connecté
if (isset($_SESSION['idUser'])) {
    header('Location: index.php');
}
?>

<body>
<main>

<!-- FORMULAIRE DE CONNEXION -->
<div class='container'>
    <h1>Connexion</h1>
    <form enctype="multipart/form-data" class="form-signin"
            action="connexion.php" method="post">
        <div class='row'>

            <!-- username : nom d'utilisateur -->
            <div class='col-12 label-form'>
                <label for="username">Nom d'utilisateur</label>
            </div>
            <div class='col-12 input-form'>
                <input type="text" name="username" maxlenght="50" required/>
            </div>

            <!-- password : mot de passe -->
            <div class='col-12 label-form'>
                <label for="password">Mot de passe</label>
            </div>
            <div class='col-12 input-form'>
                <input type="password" name="password" minlength="12" maxlenght="50" required/>
            </div>

            <!-- boutons de validation ou annulation -->
            <div class='col-12 boxValues'>
                <button type="reset">Annuler</button>
                <button type="submit">Envoyer</button>
            </div>

            <!-- lien vers inscription -->
            <div class='col-12 linkOtherConnect'>
            <a href="inscription.php">Pas encore inscrit</a>
            </div>
        </div>
    </form>
</div>

    <?php

    // Indique que des caractères interdits sont entrés
    if (isset($_REQUEST['error'])) {
        // Indique que les identifiants sont incorrects
        if ($_REQUEST['error'] == '1') {
            echo "<br/><div class='result_error'>
                Erreur : Identifiant ou mot-de-passe incorrect";
            echo "</div>";
        }
    }

    //invoque le programme pour vérifier les données
    if (isset($_POST['username']) && isset($_POST['password'])) {
        include 'fonction_sessions.php';
    }
    ?>

</main>
</body>