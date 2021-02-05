<?php

require_once 'modele/ModeleUtilisateur.php';
require_once 'vue/Vue.php';

class ControleurUtilisateur{

    private $modeleUtilistateur;

    public function __construct()
    {
        $this->modeleUtilisateur = new ModeleUtilisateur();
    }

    public function authentification($pseudo, $resultat)
    {
        $user = $this->modeleUtilisateur->getUser($pseudo);
        $isPasswordCorrect = password_verify($resultat, $user['pass']);

        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['pseudo'] = $pseudo;
            header('Location: index.php');
        } else {
            throw new \Exception("Mauvais identifiant ou mot de passe !");
        }
    }

    // Redirection vers la page de connexion
    public function login()
    {
        $vue = new Vue("Connexion");
        $vue->generer(array());
    }

    // Clotûre la session
    public function logout()
    {
        session_start();
        // Suppression des variables de session et de la session
        $_SESSION = array();
        session_destroy();

        header('Location: index.php');
    }
}