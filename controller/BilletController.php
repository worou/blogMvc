<?php
/**
 * Created by PhpStorm.
 * User: faveu
 * Date: 27/09/2018
 * Time: 18:32
 */
namespace Controller;
use Model;
class BilletController extends \Controller
{
     //Action index     
	 function index(){    
		$this->render('index');     //appel de la vue index.php
	 }

    public function affich()
    {
        $manager = new BilletManager();
        $billets = $manager->getBillets();
        require 'views/test.php';
    }
}