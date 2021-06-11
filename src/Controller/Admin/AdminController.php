<?php

namespace App\Controller\Admin;

use App\Entity\Brand;
use Doctrine\ORM\Mapping\Entity;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;

class AdminController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();
            $url = $routeBuilder->setController(BrandCrudController::class)->generateUrl();
            return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Mirakpp Админ панель');
    }

    public function configureMenuItems(): iterable
    {
        return[
            MenuItem::linktoDashboard('Dashboard', 'fa fa-home'),
            MenuItem::subMenu('Редактор страниц', 'fa fa-fw fa-file-alt')->setSubItems([
                MenuItem::linkToCrud('Марка', 'fas fa-car', Brand::class),
            ]),
        ];
    }
}
