<?php

require_once 'model/BilletManager.php';
require_once 'views/ViewManager.php';

class ControleurAccueil {

    private $billet;

    public function __construct() {
        $this->billet = new BilletManager();
    }

    // Affiche la liste de tous les billets du blog
    public function accueil() {
        $billets = $this->billet->getBillets();
        $vue = new ViewManager("Accueil");
        $vue->generer(array('billets' => $billets));
    }
}