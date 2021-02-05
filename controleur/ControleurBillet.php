<?php

require_once 'modele/Billet.php';
require_once 'modele/Commentaire.php';
require_once 'vue/Vue.php';

class ControleurBillet {

  private $billet;
  private $commentaire;

  public function __construct() {
    $this->billet = new Billet();
    $this->commentaire = new Commentaire();
  }

  // Affiche les détails sur un billet
  public function billet($idBillet) {
    $billet = $this->billet->getBillet($idBillet);
    $commentaires = $this->commentaire->getCommentaires($idBillet);
    $vue = new Vue("Billet");
    $vue->generer(array('billet' => $billet, 'commentaires' => $commentaires));
  }

  // Ajoute un commentaire à un billet
  public function commenter($auteur, $contenu, $idBillet) {
    // Sauvegarde du commentaire
    $this->commentaire->ajouterCommentaire($auteur, $contenu, $idBillet); 
    // Actualisation de l'affichage du billet
    $this->billet($idBillet);
  }

   // Affiche la page pour ajouter un billet
   public function ajoutArticle()
   {
       $vue = new Vue("AjoutBillet");
       $vue->generer(array());
   }

    // Affiche un nouveau billet
    public function ajouterArticle($titre, $contenu)
    {
        $ajouter = $this->billet->ajouterBillet($titre, $contenu);
        if ($ajouter) {
            header('Location: index.php?action=admin');

        }
        // Actualisation de l'affichage du billet
        throw new \Exception('Impossible d\'ajouter l\'article');
    }

   // Affiche la page pour modifier un billet
   public function changerArticle($idBillet)
   {
       $billet = $this->billet->getBillet($idBillet);
       $vue = new Vue("ModifierBillet");
       $vue->generer(array('billet' => $billet));
   }

   // Modifie un billet déjà existant
   public function modifierArticle($titre, $contenu, $idBillet)
   {
       $modifier = $this->billet->modifierBillet($titre, $contenu, $idBillet);
       if ($modifier) {
           header('Location: index.php?action=admin');
       }
       throw new \Exception('Impossible de modifier le billet !');
   }

   // Supprime les données liées à un billet de la bdd
   public function supprimer($idBillet)
    {
        $billet = $this->billet->getBillet($idBillet);
        $supprimer = $this->billet->deleteBillet($idBillet);
        $supprimer = $this->billet->deleteBilletCom($idBillet);
        if ($supprimer) {
            header('Location: index.php?action=admin');

        }
        // Actualisation de l'affichage
        throw new \Exception('Impossible de supprimer l\'article');

    }
}