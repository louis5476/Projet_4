<?php

require_once 'controleur/ControleurAccueil.php';
require_once 'controleur/ControleurBillet.php';
require_once 'controleur/ControleurCommentaire.php';
require_once 'vue/Vue.php';
require_once 'controleur/ControleurUtilisateur.php';
require_once 'controleur/ControleurAdmin.php';

class Routeur {

    private $ctrlAccueil;
    private $ctrlBillet;
    private $ctrlUtilisateur;
    private $ctrlAdmin;
    private $ctrlCommentaire;

    public function __construct() {
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlBillet = new ControleurBillet();
        $this->ctrlUtilisateur = new ControleurUtilisateur();
        $this->ctrlAdmin = new ControleurAdmin();
        $this->ctrlCommentaire = new ControleurCommentaire();
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {
                
                if ($_GET['action'] == 'billet') {
                    $idBillet = intval($this->getParametre($_GET, 'id'));
                    if ($idBillet != 0) {
                        $this->ctrlBillet->billet($idBillet);
                    }
                    else
                        throw new Exception("Identifiant de billet non valide");
                }

                else if ($_GET['action'] == 'commenter') {
                    $auteur = $this->getParametre($_POST, 'auteur');
                    $contenu = $this->getParametre($_POST, 'contenu');
                    $idBillet = $this->getParametre($_POST, 'id');
                    $this->ctrlBillet->commenter($auteur, $contenu, $idBillet);
                }

                // ACTION POUR ATTEINDRE LA PAGE CONNEXION
                else if ($_GET['action'] == 'login') {
                    $this->ctrlUtilisateur->login();
                }

                // ACTION POUR SE CONNECTER
                else if ($_GET['action'] == 'connexion') {
                    $pseudo = $this->getParametre($_POST, 'pseudo');
                    $resultat = $this->getParametre($_POST, 'password');
                    $this->ctrlUtilisateur->authentification($pseudo, $resultat);
                }

                // ACTION POUR ARRIVER SUR LA PAGE ADMINISTRATION
                else if ($_GET['action'] == 'admin') {
                    
                    if (!isset($_SESSION['pseudo'])) {
                        //rediriger l'utilisateur vers la page d'accueil
                        header("Location: index.php");
                    } else {
                        $this->ctrlAdmin->admin();
                    }
                }

                // ACTION POUR SE DÉCONNECTER
                else if ($_GET['action'] == 'logout') {
                    $this->ctrlUtilisateur->logout();
                } 

                // ACTION POUR ACCÉDER À LA PAGE D'AJOUT D'ARTICLE
                else if ($_GET['action'] == 'ajouterArticle') {
                    if (!isset($_SESSION['pseudo'])) {
                        //rediriger l'utilisateur vers la page d'accueil
                        header("Location: index.php");
                    } else {
                        $vue = new Vue("AjoutBillet");
                        $vue->generer(array());
                    }
                }

                // ACTION POUR ACCÉDER À LA PAGE DE MODIFICATION D'UN ARTICLE
                else if ($_GET['action'] == 'modifierArticle') {
                    
                    if (!isset($_SESSION['pseudo'])) {
                        //rediriger l'utilisateur vers la page d'accueil
                        header("Location: index.php");
                    } else {
                        $idBillet = $this->getParametre($_GET, 'id');
                        $this->ctrlBillet->changerArticle($idBillet);
                    }
                }

                // ACTION POUR MODIFIER UN ARTICLE EXISTANT
                else if ($_GET['action'] == 'modificationBillet') {
                    
                    if (!isset($_SESSION['pseudo'])) {
                        //rediriger l'utilisateur vers la page d'accueil
                        header("Location: index.php");
                    } else {
                        $idBillet = $this->getParametre($_GET, 'id');
                        $titre = $this->getParametre($_POST, 'titre');
                        $contenu = $this->getParametre($_POST, 'contenu');
                        $this->ctrlBillet->modifierArticle($titre, $contenu, $idBillet);
                    }
                }

                // ACTION POUR POSTER LE NOUVEL ARTICLE
                else if ($_GET['action'] == 'ajoutBillet') {
                    
                    if (!isset($_SESSION['pseudo'])) {
                        //rediriger l'utilisateur vers la page d'accueil
                        header("Location: index.php");
                    } else {
                        $titre = $this->getParametre($_POST, 'titre');
                        $contenu = $this->getParametre($_POST, 'contenu');
                        $this->ctrlBillet->ajouterArticle($titre, $contenu);
                    }
                }

                 // ACTION POUR SUPPRIMER UN BILLET
                 else if ($_GET['action'] == 'delete') {
                    
                    if (!isset($_SESSION['pseudo'])) {
                        //rediriger l'utilisateur vers la page d'accueil
                        header("Location: index.php");

                    } else {
                        $idBillet = $this->getParametre($_GET, 'id');
                        $this->ctrlBillet->supprimer($idBillet);
                    }

                }

                //  ACTION POUR SIGNALER UN COMMENTAIRE
                else if ($_GET['action'] == 'signalerCommentaire') {
                    $idBillet = $this->getParametre($_GET, 'bilid');
                    $idCommentaire = $this->getParametre($_GET, 'id');
                    $this->ctrlCommentaire->signalerCommentaires($idBillet, $idCommentaire);
                }

                // ACTION POUR SUPPRIMER UN COMMENTAIRE
                else if ($_GET['action'] == 'deleteCom') {
                    
                    if (!isset($_SESSION['pseudo'])) {
                        //rediriger l'utilisateur vers la page d'accueil
                        header("Location: index.php");

                    } else {
                        $idCommentaire = $this->getParametre($_GET, 'id');
                        $this->ctrlCommentaire->supprimerCommentaire($idCommentaire);
                    }

                }

                // ACTION POUR VALIDER UN COMMENTAIRE
                else if ($_GET['action'] == 'validerCom') {

                    
                    if (!isset($_SESSION['pseudo'])) {
                        //rediriger l'utilisateur vers la page d'accueil
                        header("Location: index.php");

                    } else {
                        $idCommentaire = $this->getParametre($_GET, 'id');
                        $this->ctrlCommentaire->validerCommentaire($idCommentaire);
                    }

                }
                else
                    throw new Exception("Action non valide"); 
                }
            else {  // aucune action définie : affichage de l'accueil
                $this->ctrlAccueil->accueil();
            }
        }
        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

    // Recherche un paramètre dans un tableau
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }

}