<?php $this->titre = $billet['titre']; ?>

<article>
  <header>
    <h1 class="titreBillet"><?= $billet['titre'] ?> en <time><?= $billet['date'] ?></time></h1>
  </header>
  <p><?= $billet['contenu'] ?></p>
</article>
<hr />
<header>
  <h1> Commentaires : </h1>
</header>

<div id ="commentaire">
    <form method="post" action="index.php?action=commenter">
        <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" required /><br />
        <textarea id="txtCommentaire" name="contenu" rows="4" placeholder="Votre commentaire" required></textarea><br />
        <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
        <input type="submit" value="Commenter" />
    </form>
    <?php foreach ($commentaires as $commentaire): ?>
    <p><?= $commentaire['auteur'] ?> dit :</p>
    <p><?= $commentaire['contenu'] ?></p>
    <a id="signaler" href="<?="index.php?action=signalerCommentaire&id=" . $commentaire['id'] . "&bilid=" . $billet['id']?>">Signaler</a>
    <?php endforeach; ?>
</div>