<?php
/**
 * Created by PhpStorm.
 * User: faveu
 * Date: 29/09/2018
 * Time: 16:44
 */
require_once 'Commentaire.php';
class CommentaireManager extends Manager

{

    // Renvoie la liste des commentaires associés à un billet
    public function getCommentaires($idBillet) {

        $sql = 'select COM_ID as id, COM_DATE as date,'
            . ' COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE'
            . ' where BIL_ID=:id';

        //$commentaires = $this->executerRequete($sql, array($idBillet));


        $stmt = $this->db->prepare($sql);
        $stmt->execute(array(':id' => $idBillet));
        $commentaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

       return $commentaires;
    }

    // Ajoute un commentaire dans la base
    public function ajouterCommentaire(Commentaire $comment) {
        $sql = 'insert into T_COMMENTAIRE(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID)'
            . ' values(NOW(), ?, ?, ?)';
        $req = $this->db->prepare($sql);
        //$date = date(DATE_W3C);  // Récupère la date courante
        $req->execute(array($comment->getAuthor(), $comment->getComment(), (int)$comment->getIdBillet()));
    }

  /*  public function getComments(Billet $billet)

    {
        $commentaire = $this->db->query('SELECT id_billet,  date_created from commentaires where id_billet='.$billet->getId());

        return $commentaire;
    }

public function addComments(Commentaire $billet)
    {
$q = $this->db->prepare('INSERT INTO commentaires (author, comment, date_comment) VALUES(:author, :comment, :date_comment)');

        $q->bindValue(':title', $billet->getAuthor());
        $q->bindValue(':post', $billet->getComment());
        $q->bindValue(':date_created', $billet->getDateComment());

        $q->execute();

    }


*/

}