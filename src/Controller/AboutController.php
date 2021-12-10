<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    /**
     * @Route("/about")
     */
    public function index()
    {
        $params = ['description' => 'You should kinda know now, we\'re gonna talk about your mum.'];

        $data = [
            'weight' => 'twice as much as you think',
            'age' => 'this thing we don\'t talk about'
        ];
        // chercher le fichier twig dans template pour le 2eme parametre de render
        return $this->render('about/index.html.twig', [
            'title' => $params,
            'infos' => $data
        ]);
    }
}