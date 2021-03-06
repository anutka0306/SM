<?php


namespace App\Widget;

use App\Dto\ServiceDTO;
use App\Entity\Content;
use App\Entity\Service;
use phpDocumentor\Reflection\Types\Object_;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use App\Repository\PriceCategoryRepository;

class ServicesExtention extends AbstractExtension
{
    /**
     * @var AdapterInterface
     */
    protected $cache;
    /**
     * @var PriceCategoryRepository
     */
    protected $service_repository;

    public function __construct(AdapterInterface $cache, PriceCategoryRepository $service_repository)
    {
        $this->cache = $cache;
        $this->service_repository = $service_repository;
    }

    public function getFunctions():array
    {
        return [
            new TwigFunction('service_block', [$this, 'service_block'],
                ['needs_environment' => true, 'is_safe' => ['html']]),
            new TwigFunction('service_text', [$this, 'service_text'],
                ['needs_environment' => true, 'is_safe'=> ['html']]),
        ];
    }

    public function service_block(Environment $twig):string{
        $item = $this->cache->getItem('services_block');
        if (!$item->isHit()) {
            $items = $this->service_repository->findAll();
            $html = $twig->render('v2/widget/services.html.twig', compact('items'));
            $item->set($html);
            $this->cache->save($item);
        }
        return $item->get();
    }

    public function service_text(Environment $twig, $text):string {
        $parts = explode('</p>', $text,2);
        $first_part = $parts[0];
        $second_part  = $parts[1];
        $html = $twig->render('elements/_block_content.html.twig', compact('first_part', 'second_part'));
        return $html;
    }
}