<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo4p7</title>
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
            <!--Création du formulaire avec la methode post et l'action user.php -->
            <form method="POST" action="user.php">
                <!--Création de 2 champs de saisie pour récupérer les donnés. -->
                <label for="nom"><input type="text" name="nom" value="" placeholder="Entrez votre nom"/></label>
                <label for="prenom"><input type="text" name="prenom" value="" placeholder="Entrez votre Prénom"/></label>
                <!--Création du bouton d'envoie des données -->
                <a href="index.php?nom&prenom"><input type="submit"></a><br/>
            </form>
        </div>
    </body>
</html>