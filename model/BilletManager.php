<?php
/**
 * Created by PhpStorm.
 * User: faveu
 * Date: 27/09/2018
 * Time: 16:21
 */
require 'Manager.php';

class BilletManager extends Manager
{


    //renvoie la liste des billets du blog
    public function getBillets()
    {
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
            . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
            . ' order by BIL_ID desc';
        $req = $this->db->query($sql);
        $billets = $req->fetchAll(PDO::FETCH_ASSOC);

        //var_dump($billets); die();

        return $billets;
    }

    // Renvoie les informations sur un billet
    public function getBillet($idBillet) {

        $sql = 'select BIL_ID as id, BIL_DATE as date,'
            . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
            . ' where BIL_ID=:id';

        $stmt = $this->db->prepare($sql);
        $stmt->execute(array(':id' => $idBillet));
        $billet = $stmt->fetch();
        if ($stmt->rowCount() == 1)
            return $billet;  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }


    //creation du billet

    public function addBillet(Billet $billet)
    {
        $q = $this->db->prepare('INSERT INTO billets (title, post, date_created) VALUES(:title, :post, :date_created)');

        $q->bindValue(':title', $billet->getTitle());
        $q->bindValue(':post', $billet->getPost());
        $q->bindValue(':date_created', $billet->getDateCreated());

        $q->execute();

    }

    //Mise à jour de billets

    public function updateBillet(Billet $billet)
    {
        $q = $this->db->prepare('UPDATE billets SET title = :title, post = :post, date_created = :date_created WHERE id = :id');

        $q->bindValue(':title', $billet->title(), PDO::PARAM_STR);
        $q->bindValue(':post', $billet->post(), PDO::PARAM_STR);
        $q->bindValue(':date_created', $billet->date_created(), PDO::PARAM_STR);
        $q->bindValue(':id', $billet->id(), PDO::PARAM_INT);

        $q->execute();
    }

    public function deleteBillet(Billet $billet)
    {

        $q = $this->db->prepare('DELETE FROM billets WHERE id=' . $billet->id());

        $q->execute();
    }


}