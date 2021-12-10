<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/annonce", name="annonce")
     */
    public function annonce(): Response
    {
        return $this->render('annonce/index.html.twig', [
            'controller_name' => 'AnnonceController',
        ]);
    }

    /**
     * @Route("/annonce/{id}", requirements={"id"="\d+"})
     */
    public function annonceId(INT $id)
    {
        die('Voici le détail de l\'annonce ' . $id);
    }

    /**
     * @Route("/annonce/{slug}, requirements={"slug"="[a-z0-9_-]+}")
     */
    public function annonceSlug(string $slug)
    {
        die('Woaaaa, you\'re such a poet... Here is your slug: ' . $slug);
    }
}
