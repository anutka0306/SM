<?php

namespace App\Controller;

use App\Entity\Brand;
use App\Entity\Model;
use App\Entity\RootService;
use App\Entity\Service;
use App\Entity\Simple;
use App\Entity\Vacancy;
use App\Repository\ContentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @var ContentRepository
     */
    protected $page_repository;
    
    public function __construct(ContentRepository $repository)
    {
        $this->page_repository = $repository;
    }
    
    /**
     * @Route("/{token}", name="dynamic_pages",requirements={"token"= ".+\/$"})
     */
    public function index($token)
    {
        if ( ! $page = $this->page_repository->findOnePublishedByToken($token)) {
            throw $this->createNotFoundException(sprintf('Page %s not found',$token));
        }

        if ($page instanceof Brand) {
            return $this->brand($page);
        }

        if ($page instanceof Model) {
            return $this->model($page);
        }

        if ($page instanceof Service) {
            return $this->service($page);
        }

        if ($page instanceof RootService) {
           /* echo 'Page is '.$page;
            exit();*/
            return $this->rootService($page);
        }

        if ($page instanceof Simple) {
            return $this->simple($page);
        }

        if ($page instanceof Vacancy) {
            return $this->vacancy($page);
        }

        throw $this->createNotFoundException('Page is instance of '.get_class($page));
    }
    
    
    private function brand(Brand $brand)
    {
        return $this->render('v2/pages/brand.html.twig', [
            'page' => $brand,
        ]);
    }
    
    
    private function model(Model $model)
    {
        return $this->render('v2/pages/model.html.twig', [
            'page' => $model,
        ]);
    }
    
    private function service(Service $service)
    {
        return $this->render('v2/pages/service.html.twig', [
            'page' => $service,
        ]);
    }
    
    private function rootService(RootService $rootService)
    {
        return $this->render('v2/pages/root-service.html.twig', [
            'page' => $rootService,
        ]);
    }
    
    private function simple(Simple $simple)
    {
        return $this->render('v2/pages/simple.html.twig', [
            'page' => $simple,
        ]);
    }
    
    private function vacancy(Vacancy $vacancy)
    {
        return $this->render('v2/pages/vacancy.html.twig', [
            'page' => $vacancy,
        ]);
    }
}
