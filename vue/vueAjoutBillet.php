<?php $this->titre = "Ajouter un article";?>


<section class='ajoutadmin'>

  <form class="ajoutbillet" method="post" action="index.php?action=ajoutBillet">
      <input class="titreajout" type="text" id="titre" name="titre" placeholder="Titre de l'article"><br>
      <textarea id="mytextarea" name="contenu" placeholder="Contenu de l'article"></textarea>
      <input class="boutonAjout" type="submit" value="AJOUTER" id="submit" name="ajoutBillet ›">
  </form>

</section>