<?php $this->titre = "Administration";?>

<section>
    <a href="index.php?action=ajouterArticle">Ajouter un article ›</a>
    <h2>Ensemble de vos articles</h2>
    <table id='article'>
        <tr>
            <td>Titre</td>
            <td>Date</td>
        </tr>
        <?php foreach ($billets as $billet): ?>
            <tr>
                <td><?=$billet['titre']?></td>
                <td><?=$billet['date']?></td>
                <td><a href="<?="index.php?action=modifierArticle&id=" . $billet['id']?>"> Modifier</a></td>
                <td><a href="<?="index.php?action=delete&id=" . $billet['id']?>"> Supprimer</a></td>
            </tr>
        <?php endforeach;?>
    </table>
 

    <h2>Commentaires signalés</h2>
    <table id='signale'>
        <tr>
            <td>Auteur</td>
            <td>Message</td>
        </tr>
        <?php foreach ($commentaires as $commentaire): ?>
            <tr>
                <td><?=htmlspecialchars($commentaire['auteur'])?></td>
                <td><?=htmlspecialchars($commentaire['contenu'])?></td>
                <td><a href="<?="index.php?action=validerCom&id=" . $commentaire['id']?>">Valider</a></td>
                <td><a href="<?="index.php?action=deleteCom&id=" . $commentaire['id']?>">Supprimer</a></td>
            </tr>
        <?php endforeach;?>
    </table>
</section> 