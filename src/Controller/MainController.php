<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/', name: 'home')]
    public function home()
    {
        return $this-> render('main/home.html.twig');
    }
    #[Route('/login', name: 'login')]
    public function login()
    {
        return $this-> render('main/compte.html.twig');
    }
    #[Route('/test', name: 'test')]
    public function test()
    {
        return $this-> render('main/test.html.twig');
    }
}
