<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('{_locale<%app.supported_locales%>}')]
class ZController extends AbstractController
{
    #[Route('/index', name: 'app_z')]
    public function index(): Response
    {
        return $this->render('z/index.html.twig', [
            'controller_name' => 'ZController',
        ]);
    }
}
