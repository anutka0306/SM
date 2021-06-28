<?php

namespace App\Controller;

use App\Entity\Brand;
use App\Entity\Model;
use App\Entity\RootService;
use App\Entity\Service;
use App\Entity\Simple;
use App\Entity\Vacancy;
use App\Entity\ServiceWithout;
use App\Repository\ContentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Sitemap;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;

class PageController extends AbstractController
{
    /**
     * @var ContentRepository
     */
    protected $page_repository;
    protected $em;
    protected $paginator;

    
    public function __construct(ContentRepository $repository, EntityManagerInterface $em, PaginatorInterface $paginator)
    {
        $this->page_repository = $repository;
        $this->em = $em;
        $this->paginator = $paginator;

    }
    
    /**
     * @Route("/{token}", name="dynamic_pages",requirements={"token"= ".+\/$"})
     */
    public function index($token, EntityManagerInterface $em, PaginatorInterface $paginator, Request $request)
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
            /* echo 'Page is '.$page;
            exit();*/
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

        if($page instanceof ServiceWithout){
            return $this->service_without($page);
        }

        if($page instanceof Sitemap){
            $query = $em->createQuery("SELECT a FROM App\Entity\Content as a WHERE a.published = 1 ORDER BY a.id");
            $pagination = $paginator->paginate(
                $query, /* query NOT result */
                $request->query->getInt('page', 1), /*page number*/
                500 /*limit per page*/
            );

            // parameters to template
            return $this->render('sitemap/index.html.twig', ['pagination' => $pagination,'page'=>$page]);
        }

        throw $this->createNotFoundException('Page is instance of '.get_class($page));
    }

    /**
     * @param Sitemap $sitemap
     * @param EntityManagerInterface $em
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */


    private function service_without(ServiceWithout $service_without)
    {
        return $this->render('v2/pages/service_without.html.twig',[
           'page' => $service_without,
        ]);
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
