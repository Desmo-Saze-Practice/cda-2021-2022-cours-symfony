<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Response;
class HomeController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        // affiche le fichier index.html.twig
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/annonce/{id}", requirements={"id"="\d+"})
     */
    public function annonce($id)
    {
        die('annonce ' . $id);
    }
}