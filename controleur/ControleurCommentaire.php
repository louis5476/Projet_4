<?php

require_once 'modele/Billet.php';
require_once 'modele/Commentaire.php';
require_once 'vue/Vue.php';

class ControleurCommentaire {

    private $billet;
    private $commentaires;

    public function __construct() {
        $this->billet = new Billet();
        $this->commentaires = new Commentaire();
    }

    // Affiche le signalement d'un commentaire
    public function signalerCommentaires($idBillet, $idCommentaire)
    {
        $commentaire = $this->commentaires->getCommentaires($idBillet);
        $signaler = $this->commentaires->commentaireSignale($idCommentaire);
        if ($signaler) {
            header('Location: index.php?action=billet&id=' . $idBillet);

        } else {
            throw new \Exception('Le commentaire n\'a pas été signalé');
        }
    }

    // Supprime les données liées à un commentaire de la bdd
    public function supprimerCommentaire($idCommentaire)
    {
        $commentaire = $this->commentaires->getSignaleCommentaires();
        $supprimer = $this->commentaires->deleteCommentaire($idCommentaire);
        if ($supprimer) {
            header('Location: index.php?action=admin');

        }
        // Actualisation de l'affichage
        $vue = new Vue("Admin");
        $vue->generer(array());

    }

    // Valide un commentaire dans le panneau d'administration
    public function validerCommentaire($idCommentaire)
    {
        $commentaire = $this->commentaires->getSignaleCommentaires();
        $valider = $this->commentaires->commentaireValide($idCommentaire);
        if ($valider) {
            header('Location: index.php?action=admin');

        }
        // Actualisation de l'affichage
        throw new \Exception('Impossible de supprimer le commentaire !');
    }
    
}