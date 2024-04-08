<?php

namespace App\Controller;

use Random\RandomException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarcaController extends AbstractController
{
    #[Route('/marca/nueva', name: 'app_marca_new')]
    public function nueva(): JsonResponse
    {
        return $this->json([
            'controller_name' => 'MarcaController',
        ]);
    }

    #[Route('/marca/redirect', name: 'app_marca_redirect')]
    public function redirigir(): RedirectResponse
    {
        return $this->redirect('https://symfony.com/releases');
    }

    #[Route('/marca/redirectToRoute', name: 'app_marca_redirect_to_route')]
    public function redirigirInterno(): RedirectResponse
    {
        return $this->redirectToRoute('app_marca_new', [],Response::HTTP_MOVED_PERMANENTLY);
    }

    /**
     * @throws RandomException
     */
    #[Route('/marca/params/{max}', name: 'app_marca_params')]
    public function params(int $max): JsonResponse
    {
        $numero = random_int(0,$max);

        return $this->json([
            'max' => "Encontrado entre 0 y {$max}: ". $numero,
        ]);
    }
}
