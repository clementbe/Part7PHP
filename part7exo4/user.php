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
             <?php // On recupère les données du formulaire
             if (isset($_POST['prenom']) && isset($_POST['nom'])) {
                 //on affiche ce message avec les données saisie précédement.
                echo 'Bienvenue ' . $_POST['prenom'] . ' ' . $_POST['nom'] . ' !';
             } 
             ?>
        </div>
    </body>
</html>