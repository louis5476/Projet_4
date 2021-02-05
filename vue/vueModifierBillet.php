<?php $this->titre = "Modifier un article";?>
<?php $billets = $billet?>

<section class='ajoutadmin'>

    <form class="ajoutbillet" method="post" action="<?="index.php?action=modificationBillet&id=" . $billet['id']?>">
        <input class="titreajout" type="text" id="titre" name="titre"  value="<?=$billet['titre']?>"><br>
        <textarea id="mytextarea" name="contenu" placeholder="Contenu de l'article"><?=$billet['contenu']?></textarea>
        <input class="boutonAjout" type="submit" value="MODIFIER" id="submit" name="ajoutBillet ›">
    </form>

</section>