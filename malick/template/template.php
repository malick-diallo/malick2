<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link href="../template/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1 id="titreprincipal"><strong>ECOLE SUPERIEURE POLYTECHNIQUE</strong></h1>
        <nav>
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../index.php?action=Sport">Sport</a></li>
                <li><a href="../index.php?action=Santé">Santé</a></li>
                <li><a href="../index.php?action=Education">Education</a></li>
                <li><a href="../index.php?action=Politique">Politique</a></li>
            </ul>
        </nav>
    </header>

    <?= $content ?>

</body>
</html>
