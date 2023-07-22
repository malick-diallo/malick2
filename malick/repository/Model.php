<?php
require_once('dao/DaoFactory.php');
require_once('dao/ArticlesDao.php');
require_once('dao/ArticlesDaoImp.php');
require_once('entity/Articles.php');
class Model
{
    private $articleDao;

    public function __construct()
    {
        $dao = new DaoFactory();
        $dao = $dao->getInstance();
        $this->articleDao = $dao->getArticlesDao();
    }

    public function getAllArticles(){
        $articles = $this->articleDao->list();

        return $articles;
    }

    public function getArticlesByCategorie($categorie){
        $article = null;
        if (isset($categorie) && !empty($categorie)){
            if ($categorie == 'Sport'){
                $article = $this->articleDao->listByCategorie('Sport');
            }elseif ($categorie == 'Santé'){
                $article = $this->articleDao->listByCategorie('Santé');
            }
            elseif ($categorie == 'Education'){
                $article = $this->articleDao->listByCategorie('Education');
            }
            elseif ($categorie == 'Politique'){
                $article = $this->articleDao->listByCategorie('Politique');
            }
            else
                $article = 'Cette categorie n\'existe pas ';
        }
        else
            $article = 'Veillez indiquer la categorie ';
        return $article;
    }
}