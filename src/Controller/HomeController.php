<?php

namespace App\Controller;

use App\Repository\SquirrelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/squirrel', name: 'home_index')]
class HomeController extends AbstractController
{
    #[Route('/', name: 'mainPage')]
    public function index(SquirrelRepository $squirrels): Response
    {
        $squirrelsView = $squirrels->findAll();
        return $this->render('home/index.html.twig',[
            'squirrels' => $squirrelsView
        ]);
    }
}
