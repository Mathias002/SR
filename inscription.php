<?php
$pageTitle = "Inscription";
//include 'nav.php';  //C'était pour inclure le nav

// Redirection vers l'index si l'utilisateur est déjà connecté
if (isset($_SESSION['idUser'])) {
    header('Location: index.php');
}
?>

<body>
<main>

<!-- FORMULAIRE D'INSCRIPTION -->
<div class='container'>
    <h1>Inscription</h1>
    <form enctype="multipart/form-data" class="form-signin"
            action="fonction_newUser.php" method="post">
        <div class='row'>
            
            <!-- username : nom d'utilisateur -->
            <div class='col-12 label-form'>
                <label for="username">Nom d'utilisateur</label>
            </div>
            <div class='col-12 input-form'>
                <input type="text" name="username" maxlenght="50" required/>
            </div>

            <!-- mail : adresse mail -->
            <div class='col-12 label-form'>
                <label for="mail">Mail</label>
            </div>
            <div class='col-12 input-form'>
                <input type="text" name="mail" maxlenght="255" required/>
            </div>

            <!-- password : mot de passe -->
            <div class='col-12 label-form'>
                <label for="password">Mot de passe</label>
            </div>
            
            <div class='col-12 input-form'>
                <input type="password" name="password"  minlength="12" maxlenght="50" required/>
            </div>

             <!-- boutons de validation ou annulation -->
            <div class='col-12 boxValues'>
                <button type="reset">Annuler</button>
                <button type="submit">Envoyer</button>
            </div>

            <!-- lien vers connexion -->
            <div class='col-12 linkOtherConnect'>
                <a href="connexion.php">Déjà inscrit</a>
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
                Erreur : erreur lors de l'inscription";
            echo "</div>";
        }
        if ($_REQUEST['error'] == '2') {
            echo "<br/><div class='result_error'>
                Erreur : Nom d'utilisateur déjà pris";
            echo "</div>";
        }
    }
?>

</main>
</body>