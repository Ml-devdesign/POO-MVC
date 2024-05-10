<?php

class HomeController
{
    /**
     * Fonction d'action par défaut du controleur "home"
     */
    public function index() 
    {
        $title = 'Bienvenue sur la page d\'accueil';
        $template = '../views/home/index.html.php'; // Fichier de vue du même nom que l'action dans un dossier du même nom que le controleur

        require '../views/layout.html.php';
    }

    public function about()
    {
        $title = 'À propos de nous';
        $template =  '../views/home/about.html.php';

        require '../views/layout.html.php';
    }
}