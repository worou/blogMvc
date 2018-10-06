<?php //var_dump($billet); $titre = "Mon Blog - " . $billet[2]; ?>


   <article>
        <header>
            <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
            <time><?= $billet['date'] ?></time>
        </header>
        <p><?= $billet['contenu'] ?></p>
    </article>
    <hr />
    <header>
        <h1 id="titreReponses">Réponses à <?= $billet['titre'] ?></h1>
    </header>
    <?php foreach ($commentaires as $commentaire): ?>
        <p><?= $commentaire['auteur'] ?> dit :</p>
        <p><?= $commentaire['contenu'] ?></p>
    <?php endforeach; ?>

<form method="post" action="index.php?action=commenter">
    <div class="form-group">
        <input class="form-control" name="auteur" type="text" placeholder="Votre pseudo"
           required >
    </div>
    <div class="form-group">
    <textarea class="form-control" name="contenu" rows="4"
              placeholder="Votre commentaire" required></textarea>
    </div>
        <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    <div class="form-group">
        <input class="btn btn-success" type="submit" value="Commenter" />
    </div>
</form>
