<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TanyaController extends AbstractController
{

    #[Route('/{_locale}/tanya', name: 'app_tanya')]
    public function tanya()
    {
        return new Response("Hola desde Tanya");
    }
}