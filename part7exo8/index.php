<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo7p7</title>
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

            <?php
            //recupération des données
            if (isset($_POST['civility']) && isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_FILES['myFile']) && $_FILES['myFile']['error'] == 0) {
                $fileInfos = pathinfo($_FILES['myFile']['name']);
                $fileExtension = $fileInfos['extension'];
                $fileName = $fileInfos['filename'];
                //vérification du type de fichier
                $extensions_autorisees = array('pdf');
                if (in_array($fileExtension, $extensions_autorisees)) {
                    echo "Le fichier est bien en PDF !";
                } else {
                    echo 'Le fichier n\'est pas en PDF!';
                }
                //Sécurisation des inputs et leur affichage.
                echo 'Bonjour ' . strip_tags($_POST['civility']) . '. ' . strip_tags($_POST['lastName']) . ' ' . strip_tags($_POST['firstName']);
                ?>
                <br>
                <?php
                echo 'Votre ficher du nom de ' . $fileName . ' est de type ' . $fileExtension;
            } else {
                //Création du formulaire avec la methode post et l'action index.ph
                echo '<p>Veuillez inscrire vos informations:</p>
                      <form action="index.php" method="post" enctype="multipart/form-data">
                          <p>
                              <select name="civility">
                                  <option value="Mr">Mr</option>
                                  <option value="Mme">Mme</option>
                              </select>
                              <input type="text" name="lastName" placeholder="Nom">
                              <input type="text" name="firstName" placeholder="Prénom"><br>
                              <input type="file" name="myFile"><br>
                              <input type="submit" value="Valider">
                          </p>
                      </form>';
            }
            ?>
        </div>
    </body>
</html>