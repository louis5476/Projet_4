<!doctype html>
<html lang="fr">

  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="png" href="montagne.png" /> 
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <script src="https://cdn.tiny.cloud/1/0ys0oeyn3zupdvaa8pxdxi5z2x90hdaq6wjw3julrrkqh84i/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
          tinymce.init({
          selector: '#mytextarea'
          });
    </script>
    <title><?= $titre ?></title>   <!-- Élément spécifique -->
  </head>

  <body>
    <div id="global">
    
      <header>
      <a href="index.php"><h1 id="titreBlog">Billet simple pour l'Alaska</h1></a>

      <div id="top">
        <p> Bienvenue ! Je suis Jean Forteroche, écrivain.<br> 
            Vous êtes actuellement sur mon Blog où je poste au fur et à mesure un nouveau chapitre de mon dernier roman intitulé "Billet simple pour l'Alaska".<br> 
            N'hésitez pas à y laisser des commentaires ! 
        </p>
        <img id="alaska" src="Alaska.jpg" alt="Photo d'illustration de l'Alaska" widht='200' height="190"/>
      </div>
      </header>

      <div id="contenu">
        <?= $contenu ?>   <!-- Élément spécifique -->
      </div>
      
      <?php
        if (isset($_SESSION['pseudo'])) {
            echo '<li><a href="index.php?action=logout">DECONNEXION</a></li>';
            echo '<li><a href="index.php?action=admin">ADMINISTRATION</a></li>';
        } else {
            echo '<li><a href="index.php?action=login">CONNEXION</a></li>';
        }
      ?>

      <footer id="piedBlog">
        Blog réalisé par GTL en PHP, HTML5 et CSS3.
      </footer>

    </div> <!-- #global -->
    <script src="signale.js"></script>
  </body>
</html>