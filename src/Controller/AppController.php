<?php

namespace App\Controller;

use App\Repository\CouteauRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'app')]
    public function index(CouteauRepository $repo): Response
    {
        $couteaux_list = $repo->findAll();

        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
            "couteaux_list" => $couteaux_list
        ]);
    }
}
