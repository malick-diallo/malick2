<?php

class Articles
{
    private $id;
    private $titre;
    private $contenu;
    private $dateCreation;
    private $dateModification;
    private $categorie;

    /**
     * @param $id
     * @param $titre
     * @param $contenu
     * @param $dateCreation
     * @param $dateModification
     * @param $categorie
     */
    public function __construct($id, $titre, $contenu, $dateCreation, $dateModification, $categorie)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->dateCreation = $dateCreation;
        $this->dateModification = $dateModification;
        $this->categorie = $categorie;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    public function getDateModification()
    {
        return $this->dateModification;
    }

    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }


}