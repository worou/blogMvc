<?php

require_once 'Model/BilletManager.php';
require_once 'Model/CommentaireManager.php';
require_once 'Model/Commentaire.php';
require_once 'views/Vue.php';

class ControleurBillet {

    private $billet;
    private $commentaire;
    private $comment;

    public function __construct() {
        $this->billet = new BilletManager();
        $this->commentaire = new CommentaireManager();
    }

    // Affiche les détails sur un billet
    public function billet($idBillet) {
        $billet = $this->billet->getBillet($idBillet);
        $commentaires = $this->commentaire->getCommentaires($idBillet);
        $vue = new Vue("Billet");
        $vue->generer(array('billet' => $billet, 'commentaires' => $commentaires));
    }


    // Ajoute un commentaire à un billet
    public function commenter($auteur, $contenu, $idBillet) {

        $comment = new Commentaire();

        $comment->setAuthor($auteur);
        $comment->setComment($contenu);
        $comment->setIdBillet($idBillet);
        // Sauvegarde du commentaire
        $this->commentaire->ajouterCommentaire($comment);
        // Actualisation de l'affichage du billet
        $this->billet($idBillet);
    }

}