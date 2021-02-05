<?php

require_once 'modele/Billet.php';
require_once 'modele/Commentaire.php';
require_once 'vue/Vue.php';

class ControleurAdmin {

    private $billet;
    private $commentaire;

    public function __construct() {
        $this->billet = new Billet();
        $this->commentaire = new Commentaire();
  }

    // Affiche la page d'administration
    public function admin()
        {
            $vue = new Vue("Admin");
            $billets = $this->billet->getBillets();
            $commentaires = $this->commentaire->getSignaleCommentaires();
            $vue->generer(array('billets' => $billets, 'commentaires' => $commentaires));
        }
}