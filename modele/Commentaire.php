<?php

require_once 'modele/Modele.php';

class Commentaire extends Modele {

    // Renvoie la liste des commentaires associés à un billet
    public function getCommentaires($idBillet) {
        $sql = 'SELECT COM_ID as id, COM_DATE as date, COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE where BIL_ID=?';
        $commentaires = $this->executerRequete($sql, array($idBillet));
        return $commentaires;
    }

    public function getAllCommentaires() {
        $sql = 'SELECT COM_ID as id, COM_DATE as date, COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE';
        $commentaires = $this->executerRequete($sql, array());
        return $commentaires;
    }

    // Renvoie la liste de tous les commentaires signalés
    public function getSignaleCommentaires()
    {
        $sql = 'SELECT COM_ID as id, COM_DATE as date, COM_AUTEUR AS auteur, COM_CONTENU AS contenu, COM_SIGNALE AS signale, BIL_ID AS idbil FROM T_COMMENTAIRE WHERE com_signale=true';
        $commentaire = $this->executerRequete($sql);
        return $commentaire;
    }


    // Ajoute un commentaire dans la base
    public function ajouterCommentaire($auteur, $contenu, $idBillet) {
        $sql = 'INSERT into T_COMMENTAIRE (COM_DATE, COM_AUTEUR, COM_CONTENU, COM_SIGNALE, BIL_ID) values(now(), ?, ?, 0, ?)';
        $this->executerRequete($sql, array($auteur, $contenu, $idBillet));
    } 

    // Modifie les données d'un commentaire pour le passer en signaler
    public function commentaireSignale($idCommentaire)
    {
        $sql = 'UPDATE T_COMMENTAIRE SET COM_SIGNALE=TRUE WHERE COM_ID = ?';
        $signalerCommentaire = $this->executerRequete($sql, array($idCommentaire));
        return $signalerCommentaire;
    }

    // Modifie les données d'un commentaire pour le passer en Validé
    public function commentaireValide($idCommentaire)
    {
        $sql = 'UPDATE T_COMMENTAIRE SET COM_SIGNALE=FALSE WHERE COM_ID = ?';
        $signalerCommentaire = $this->executerRequete($sql, array($idCommentaire));
        return $signalerCommentaire;
    }

    //  Supprime un billet de la base de données
    public function deleteCommentaire($idCommentaire)
    {
        // Supprime un billet de la base de données
        $sql = 'DELETE FROM T_COMMENTAIRE WHERE `t_commentaire`.`com_ID` = ?';
        $suppression = $this->executerRequete($sql, array($idCommentaire));
        return $suppression;
    }
}