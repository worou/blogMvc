<?php
/**
 * Created by PhpStorm.
 * User: faveu
 * Date: 24/09/2018
 * Time: 00:28
 */
require_once 'Entity.php';
Class Commentaire {


    private $author;
    private $comment;
    private $date_comment;
    private $report;
    private $id_billet;

    /**
     * @return mixed
     */
    public function getIdBillet()
    {
        return $this->id_billet;
    }

    /**
     * @param mixed $id_billet
     */
    public function setIdBillet($id_billet)
    {
        $this->id_billet = $id_billet;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getDateComment()
    {
        return $this->date_comment;
    }

    /**
     * @param mixed $date_comment
     */
    public function setDateComment($date_comment)
    {
        $this->date_comment = $date_comment;
    }

    /**
     * @return mixed
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * @param mixed $report
     */
    public function setReport($report)
    {
        $this->report = $report;
    }

}


