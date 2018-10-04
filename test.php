<?php
/**
 * Created by PhpStorm.
 * User: Adimi
 * Date: 02/10/2018
 * Time: 10:13
 */
require 'model/BilletManager.php';
require 'model/CommentaireManager.php';

$billet = new BilletManager();
$commentaires = new CommentaireManager();

echo $billet->getBillet(1)[0];
echo "<pre>";
var_dump($billet->getBillet(1));

echo "</pre>";
//($billet->getBillet(1));

var_dump($commentaires->getCommentaires(1));