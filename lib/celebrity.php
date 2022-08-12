<?php session_start(); ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celebrity</title>
    <link rel="stylesheet" href="../css/style-celebrity.css">
</head>
<body>
    <div class="galerie">
        <h1>Ma Galerie !</h1>
        <div class="btn-ajout">
            <a href="../">Ajouter une photo</a>
        </div>
        <?php
        if (isset($_FILES["image"]["name"]) && ($_FILES["image"]["error"] == 0)){
            if (isset($_SESSION["adresse"])){
                $nom_dossier_visiteur = time();
                mkdir("../images/".$nom_dossier_visiteur);
                $_SESSION['chemin'] = '../images/'.$nom_dossier_visiteur;
            }
            $dossier_destination_fichier = $_SESSION["chemin"]."/".$_FILES["image"]["name"];
            move_uploaded_file($_FILES["image"]["tmp_name"],$dossier_destination_fichier);
            $_SESSION["adresse"][$_FILES["image"]["name"]] = $dossier_destination_fichier;
        }
//        var_dump($_SESSION['adresse']);
        if (isset($_SESSION["adresse"])){
            foreach ($_SESSION["adresse"] as $key => $value){
                echo "<img src=\"$value\" alt=\"$key\" />";

            }
        }

        ?>
        <div class="btn-ajout">
            <?php
            if (isset($_SESSION["adresse"])){
                echo "<a href=\"../\">Ajouter une photo</a>";
            }
            ?>
        </div>
        <div class="btn-ajout">
            <?php
            if (isset($_SESSION["adresse"])){
                echo "<a href=\"logout.php\">Réinitialiser</a>";
            }
            ?>
        </div>
<!--      <?php //echo getcwd(); // nous permet de voir le repertoire du fichier ?>   -->
    </div>
</body>
</html>