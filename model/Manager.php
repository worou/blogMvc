<?php
/**
 * Created by PhpStorm.
 * User: faveu
 * Date: 24/09/2018
 * Time: 23:14
 */
abstract class Manager
{


    //objet PDO daccès à la BDD
    protected $db;

    public function __construct()
    {
        $this->getBdd();
    }

    public function getBdd()
    {
        if ($this->db == null) {
            //création de la connexion
            $this->db = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8', 'root', '',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
               // echo'ok';
        }

        return $this->db;

    }



}





