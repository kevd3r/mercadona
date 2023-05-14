<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageControlellerController extends AbstractController
{
    #[Route('/home', name: 'app_page_controleller')]
    public function index(): Response
    {
        return $this->render('page_controleller/index.html.twig', [
            'controller_name' => 'PageControlellerController',
        ]);
    }
}
