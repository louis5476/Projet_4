<?php $this->titre = "Billet simple pour l'Alaska"; ?>

<?php foreach ($billets as $billet): ?>
    <article>
            <a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
                <h1 class="titreBillet"><?= $billet['titre'] ?> en <time><?= $billet['date'] ?></time></h1>
            </a>
        <?php $billet = $billet['contenu'];
        echo substr($billet, 0, 1000) . "[...]";
        ?>
    </article>
    <hr />
<?php endforeach; ?>
