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

    #[Route('/main', name: 'main')]
    public function main(): Response
    {
        return $this->render('z/main.html.twig');
    }

    #[Route('/main-xml', name: 'main_xml')]
    public function mainXml(): Response
    {
        $xml = $this->render('z/test.xml.twig');

        $response = new Response($xml);
        $response->headers->set('Content-Type', 'xml');

        return $response;

    }
}
