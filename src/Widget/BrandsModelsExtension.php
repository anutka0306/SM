<?php

namespace App\Widget;

use App\Entity\PriceBrand;
use App\Entity\PriceModel;
use App\Repository\PriceBrandRepository;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use App\Repository\PriceCategoryRepository;
use App\Repository\PriceServiceRepository;

class BrandsModelsExtension extends AbstractExtension
{
    /**
     * @var PriceBrandRepository
     */
    protected $brand_repository;
    /**
     * @var AdapterInterface
     */
    protected $cache;

    /**
     * @var PriceCategoryRepository
     */
    protected $service_repository;

    /**
     * @var PriceServiceRepository
     */
    protected $price_service_repository;

    public function __construct(PriceBrandRepository $brand_repository, AdapterInterface $cache, PriceCategoryRepository $service_repository, PriceServiceRepository $price_service_repository)
    {
        $this->brand_repository = $brand_repository;
        $this->cache = $cache;
        $this->service_repository = $service_repository;
        $this->price_service_repository = $price_service_repository;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('brands_block', [$this, 'brands_block'],
                ['needs_environment' => true, 'is_safe' => ['html']]),
            new TwigFunction('brands_service_block', [$this, 'brands_service_block'],
                ['needs_environment' => true, 'is_safe' => ['html']]),
            new TwigFunction('brands_models_sedan_hatchback', [$this, 'brands_models_sedan_hatchback'],
                ['needs_environment' => true, 'is_safe' => ['html']]),
            new TwigFunction('brands_models_crossover', [$this, 'brands_models_crossover'],
                ['needs_environment' => true, 'is_safe' => ['html']]),
            new TwigFunction('brands_models_suv', [$this, 'brands_models_suv'],
                ['needs_environment' => true, 'is_safe' => ['html']]),
            new TwigFunction('brands_models_popular', [$this, 'brands_models_popular'],
                ['needs_environment' => true, 'is_safe' => ['html']]),
            new TwigFunction('models_sedan_hatchback', [$this, 'models_sedan_hatchback'],
                ['needs_environment' => true, 'is_safe' => ['html']]),
            new TwigFunction('models_crossover', [$this, 'models_crossover'],
                ['needs_environment' => true, 'is_safe' => ['html']]),
            new TwigFunction('models_suv', [$this, 'models_suv'],
                ['needs_environment' => true, 'is_safe' => ['html']]),
            new TwigFunction('models_van', [$this, 'models_van'],
                ['needs_environment' => true, 'is_safe' => ['html']]),
            new TwigFunction('models_popular', [$this, 'models_popular'],
                ['needs_environment' => true, 'is_safe' => ['html']]),
        ];
    }

    public function brands_block(Environment $twig): string
    {
        $item = $this->cache->getItem('brands_block');
        if (!$item->isHit()) {//если данное значение не закешировано
            $items = $this->brand_repository->findBy([], ['name' => 'asc']);
            $html = $twig->render('v2/widget/brands.html.twig', compact('items'));
            $item->set($html);
            $this->cache->save($item);
        }
        return $item->get();
    }

    public function brands_service_block(Environment $twig, $service = null): string
    {
            $item = $this->cache->getItem('brands_block');
            $items = $this->brand_repository->findBy([], ['name' => 'asc']);
            if(!$service) {
                $services = $this->service_repository->findAll();
            }else{
                $services = $this->price_service_repository->findBy(['slug' => $service]);
            }
            $html = $twig->render('v2/widget/brands.html.twig', compact('items', 'services'));
            $item->set($html);

        return $item->get();
    }

    public function brands_models_sedan_hatchback(Environment $twig): string
    {
        $item = $this->cache->getItem('brands_models_sedan_hatchback');
        if (!$item->isHit()) {//если данное значение не закешировано
        $brands = $this->getBrandsWithFilteredModels([
            PriceModel::TYPE_SEDAN,
            PriceModel::TYPE_HATCHBACK,
        ]);

        $html = $twig->render('v2/widget/brands-with-models.html.twig', compact('brands'));
        $item->set($html);
            $this->cache->save($item);
        }
        return $item->get();
    }

    public function brands_models_crossover(Environment $twig): string
    {
        $item = $this->cache->getItem('brands_models_crossover');
        if (!$item->isHit()) {//если данное значение не закешировано
        $brands = $this->getBrandsWithFilteredModels([
            PriceModel::TYPE_CROSSOVER,
        ]);

        $html = $twig->render('v2/widget/brands-with-models.html.twig', compact('brands'));
        $item->set($html);
            $this->cache->save($item);
        }
        return $item->get();
    }

    public function brands_models_suv(Environment $twig): string
    {
        $item = $this->cache->getItem('brands_models_suv');
        if (!$item->isHit()) {//если данное значение не закешировано
        $brands = $this->getBrandsWithFilteredModels([
            PriceModel::TYPE_SUV,
        ]);

        $html = $twig->render('v2/widget/brands-with-models.html.twig', compact('brands'));
        $item->set($html);
            $this->cache->save($item);
        }
        return $item->get();
    }

    public function brands_models_popular(Environment $twig): string
    {
        $item = $this->cache->getItem('brands_models_popular');
        if (!$item->isHit()) {//если данное значение не закешировано
        $brands = $this->brand_repository->findAllWithModels();

        foreach ($brands as $brand) {
            $brand->filterPriceModelsByPopular();
        }

        $brands = array_filter($brands, static function (PriceBrand $brand) {
            return count($brand->getPriceModels()) > 0;
        });

        $html = $twig->render('v2/widget/brands-with-models.html.twig', compact('brands'));
        $item->set($html);
            $this->cache->save($item);
        }
        return $item->get();
    }

    public function models_sedan_hatchback(Environment $twig, PriceBrand $brand): string
    {
        $item = $this->cache->getItem('models_sedan_hatchback' . $brand->getName());
        if (!$item->isHit()) {//если данное значение не закешировано
        $models = $brand->filterPriceModelsByTypes([
            PriceModel::TYPE_SEDAN,
            PriceModel::TYPE_HATCHBACK,
        ], false);
        $html = $twig->render('v2/widget/models.html.twig', compact('models'));
        $item->set($html);
            $this->cache->save($item);
        }
        return $item->get();
    }

    public function models_crossover(Environment $twig, PriceBrand $brand): string
    {
        $item = $this->cache->getItem('models_crossover' . $brand->getName());
        if (!$item->isHit()) {//если данное значение не закешировано
        $models = clone $brand->filterPriceModelsByTypes([
            PriceModel::TYPE_CROSSOVER,
        ], false);
        $html = $twig->render('v2/widget/models.html.twig', compact('models'));
        $item->set($html);
            $this->cache->save($item);
        }
        return $item->get();
    }

    public function models_suv(Environment $twig, PriceBrand $brand): string
    {
        $item = $this->cache->getItem('models_suv' . $brand->getName());
        if (!$item->isHit()) {//если данное значение не закешировано
        $models = $brand->filterPriceModelsByTypes([
            PriceModel::TYPE_SUV,
        ], false);
        $html = $twig->render('v2/widget/models.html.twig', compact('models'));
        $item->set($html);
            $this->cache->save($item);
        }
        return $item->get();
    }

    public function models_van(Environment $twig, PriceBrand $brand): string
    {
        $item = $this->cache->getItem('models_van' . $brand->getName());
        if (!$item->isHit()) {//если данное значение не закешировано
        $models = $brand->filterPriceModelsByTypes([
            PriceModel::TYPE_VAN,
        ], false);
        $html = $twig->render('v2/widget/models.html.twig', compact('models'));
        $item->set($html);
            $this->cache->save($item);
        }
        return $item->get();
    }

    public function models_popular(Environment $twig, PriceBrand $brand): string
    {
        $item = $this->cache->getItem('models_popular' . $brand->getName());
        if (!$item->isHit()) {//если данное значение не закешировано
        $models = $brand->filterPriceModelsByPopular(false);
        $html = $twig->render('v2/widget/models.html.twig', compact('models'));
        $item->set($html);
            $this->cache->save($item);
        }
        return $item->get();
    }

    private function getBrandsWithFilteredModels(array $types): array
    {
        $brands = $this->brand_repository->findAllWithModels();

        foreach ($brands as $brand) {
            $brand->filterPriceModelsByTypes($types);
        }

        return array_filter($brands, static function (PriceBrand $brand) {
            return count($brand->getPriceModels()) > 0;
        });
    }
}
