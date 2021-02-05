<?php

require_once "modele/Modele.php";

class ModeleUtilisateur extends Modele
{

    public function getUser($pseudo)
    {
        //  Récupération de l'utilisateur et de son mot de passe
        $sql = 'SELECT pseudo, pass FROM users';
        $connexion = $this->executerRequete($sql, array($pseudo));
        $resultat = $connexion->fetch();
        return $resultat;
    }

}