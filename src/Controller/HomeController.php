<?php

namespace App\Controller;

use App\Repository\ContentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ContentRepository $repository)
    {
        $page = $repository->findOneBy(['path'=>'/']);
        
        return $this->render('v2/pages/home/index.html.twig', [
            'page' => $page,
        ]);
    }
}
