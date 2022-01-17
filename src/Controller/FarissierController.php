<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FarissierController extends AbstractController
{
    /**
     * @Route("/farissier", name="farissier")
     */
    public function index(): Response
    {
        return $this->render('farissier/index.html.twig', [
            'controller_name' => 'FarissierController',
        ]);
    }
}
