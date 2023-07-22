<?php

interface ArticlesDao
{
    public function list();
    public function listByCategorie($categorie);
}