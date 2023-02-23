<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RocketController extends AbstractController
{
    #[Route('/rocket', name: 'app_rocket')]
    public function index(): Response
    {
        return $this->render('rocket/index.html.twig', [
            'controller_name' => 'RocketController',
        ]);
    }
}
