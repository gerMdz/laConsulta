<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GerController extends AbstractController
{
    #[Route('/ger', name: 'app_ger')]
    public function index(): Response
    {
        return $this->render('ger/index.html.twig', [
            'controller_name' => 'GerController',
        ]);
    }
}
