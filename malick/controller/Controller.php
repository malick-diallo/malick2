<?php

require_once('repository/Model.php');
class Controller
{
    private $model;
    public function __construct(Model $modelDb)
    {
        $this->model = $modelDb;
    }

    public function showArticles(){
        $request = $this->model->getAllArticles();
        require('template/showArticlesPage.php');
    }

    public function showArticlesByCategorie($categorie){
        if (isset($categorie)){
            if ($categorie == 'Sport'){
                $request = $this->model->getArticlesByCategorie('Sport');
                require('template/showArticlesPage.php');
            }
            elseif ($categorie == 'Santé'){
                $request = $this->model->getArticlesByCategorie('Santé');
                require('template/showArticlesPage.php');
            }
            elseif ($categorie == 'Education'){
                $request = $this->model->getArticlesByCategorie('Education');
                require('template/showArticlesPage.php');
            }
            elseif ($categorie == 'Politique'){
                $request = $this->model->getArticlesByCategorie('Politique');
                require('template/showArticlesPage.php');
            }
            else{
                $request = 'Cette categorie n\'exixte pas!';
            }
        }else{
            $request = 'Pas de categorie !';
            require('template/showArticlesPage.php');
        }
    }

}