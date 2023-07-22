<?php

require_once('controller/Controller.php');
require_once('repository/Model.php');
try {
    $controller = new Controller(new Model());
    if (isset($_GET['action']) && !empty($_GET['action'])) {
        if ($_GET['action'] == 'Sport')
            $controller->showArticlesByCategorie('Sport');
        elseif ($_GET['action'] == 'Santé') {
            $controller->showArticlesByCategorie('Santé');
        } elseif ($_GET['action'] == 'Education') {
            $controller->showArticlesByCategorie('Education');
        } elseif ($_GET['action'] == 'Politique') {
            $controller->showArticlesByCategorie('Politique');
        }
        else{
            throw new Exception('Aucun identifiant de categorie envoyé !');
        }
    } else {
        $controller->showArticles();
    }
}catch (Exception $exception){
    $errorMessage = $exception->getMessage();

    require('template/error.php');
}


