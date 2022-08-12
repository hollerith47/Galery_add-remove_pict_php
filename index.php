
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/style-accueil.css">
</head>
<body>
    <h1>Ma galerie photos Web !</h1>
    <form class="" action="lib/celebrity.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
        <input type="file" name="image">
        <input type="submit" name="" value="Ajouter">
    </form>
    <div class="btn-affiche">
        <a href="lib/celebrity.php">Afficher Photos !</a>
    </div>

    <?php
//    var_dump($_FILES);
    ?>

</body>
</html>