<?php foreach ($billets as $billet): ?>
    <article>
        <header>
            <a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
                <h1 class="titreBillet bg-secondary text-white text-center"><?= $billet['titre'] ?></h1>
            </a>
            <time><?= $billet['date'] ?></time>
        </header>

            <p class=""><?= $billet['contenu'] ?></p>
            <p class="text-right"><a href="<?= "index.php?action=billet&id=" . $billet['id']?>" >Commentaire(s)</a></p>

    </article>
    <hr />
<?php endforeach; ?>