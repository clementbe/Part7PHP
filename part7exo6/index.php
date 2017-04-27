<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo6p7</title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="align">
            <a href="../part7exo1/index.php"><button class="button">Exercice 1</button></a>
            <a href="../part7exo2/index.php"><button class="button">Exercice 2</button></a>
            <a href="../part7exo3/index.php"><button class="button">Exercice 3</button></a>
            <a href="../part7exo4/index.php"><button class="button">Exercice 4</button></a>
            <a href="../part7exo5/index.php"><button class="button">Exercice 5</button></a>
            <a href="../part7exo6/index.php"><button class="button">Exercice 6</button></a>
            <a href="../part7exo7/index.php"><button class="button">Exercice 7</button></a>
            <a href="../part7exo8/index.php"><button class="button">Exercice 8</button></a>
        </div>
        <div class="php">
            <!--Création du formulaire avec la methode get et l'action user.php -->
            
            <?php
            // On recupère les données du formulaire
            if (isset($_POST['sexe']) && isset($_POST['nom']) && isset($_POST['prenom'])) {
                //on affiche ce message avec les données saisie précédement.
                echo 'Bienvenue ' . $_POST['sexe'] . ' ' . $_POST['nom'] . ' ' . $_POST['prenom'] . ' !';
            }else{
                echo '<form method="POST" action="index.php">
                <!--Création de 2 champs de saisie pour récupérer les donnés. -->
                <label for="nom"><input type="text" name="nom" value="" placeholder="Entrez votre nom"/></label>
                <label for="prenom"><input type="text" name="prenom" value="" placeholder="Entrez votre Prénom"/></label>
                <!--Creation du menu déroulant -->
                    <select name="sexe" size="1">
                        <option>Mr</option>
                        <option>Mme</option>
                    </select>
                <!--Création du bouton d\'envoie des données -->
                <a href="index.php?nom&prenom&sexe"><input type="submit"></a><br/>
                </form>';
            }
            ?>
        </div>
    </body>
</html>