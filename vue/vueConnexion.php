<?php $this->titre = 'Connexion'; ?>

    <div class="formulaireConnexion">
      <form method="post" action="index.php?action=connexion">
        <h2>Connexion</h2>
        <input type="text" id="pseudo" placeholder="Pseudo" name="pseudo"><br>
        <input type="password" id="password" placeholder="Mot de passe" name="password"><br>
        <input type="submit" value="Connexion" id="submit" name="Connexion">
        <p><a href="index.php">Retourner à la page d'accueil</a></p>
      </form>
    </div>
