<?php

require_once 'modele/Modele.php';

class Billet extends Modele
{

    // Renvoie la liste de tous les billets, triés par identifiant décroissant
    public function getBillets()
    {
        $sql = 'SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET ';
        $billets = $this->executerRequete($sql);
        return $billets;
    }

    // Renvoie les informations sur un billet
    public function getBillet($idBillet)
    {
        $sql = 'SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET where BIL_ID=?';
        $billet = $this->executerRequete($sql, array($idBillet));
        if ($billet->rowCount() > 0) {

            // if ($billet->rowCount() == 1) {
            return $billet->fetch();
        }
        // Accès à la première ligne de résultat
        else {
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
        }
    }

    //  Supprime un billet de la base de données
    public function deleteBillet($idBillet)
    {
        // Supprime un billet de la base de données
        $sql = 'DELETE FROM `t_billet` WHERE `t_billet`.`BIL_ID` = ?';
        $suppression = $this->executerRequete($sql, array($idBillet));
        return $suppression;
    }

    //  Supprime les commentaires associés à un billet de la base de données
    public function deleteBilletCom($idBillet)
    {
        // Supprime un billet de la base de données
        $sql = 'DELETE FROM `t_commentaire` WHERE `t_commentaire`.`bil_ID` = ?';
        $suppression = $this->executerRequete($sql, array($idBillet));
        return $suppression;
    }

    // Ajoute les données du billet dans la table associée
    public function ajouterBillet($titre, $contenu)
    {
        $sql = 'INSERT into T_BILLET(bil_date, bil_titre, bil_contenu) values(NOW(), ?, ?)';
        $ajoutBillet = $this->executerRequete($sql, array($titre, $contenu));
        return $ajoutBillet;
    }

    // Modifie les données du billet dans la table associée
    public function modifierBillet($titre, $contenu, $idBillet)
    {
        $sql = 'UPDATE t_billet SET bil_titre=? ,bil_contenu=? WHERE `t_billet`.`BIL_ID` = ?';
        $modifierBillet = $this->executerRequete($sql, array($titre, $contenu, $idBillet));

        return $modifierBillet;
    }

}