<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PriceCategory extends \App\Entity\PriceCategory implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\PriceCategory' . "\0" . 'id', '' . "\0" . 'App\\Entity\\PriceCategory' . "\0" . 'parent', '' . "\0" . 'App\\Entity\\PriceCategory' . "\0" . 'children', '' . "\0" . 'App\\Entity\\PriceCategory' . "\0" . 'name', '' . "\0" . 'App\\Entity\\PriceCategory' . "\0" . 'contents', '' . "\0" . 'App\\Entity\\PriceCategory' . "\0" . 'priceServices', '' . "\0" . 'App\\Entity\\PriceCategory' . "\0" . 'metaDescriptionTemplate', '' . "\0" . 'App\\Entity\\PriceCategory' . "\0" . 'slug'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\PriceCategory' . "\0" . 'id', '' . "\0" . 'App\\Entity\\PriceCategory' . "\0" . 'parent', '' . "\0" . 'App\\Entity\\PriceCategory' . "\0" . 'children', '' . "\0" . 'App\\Entity\\PriceCategory' . "\0" . 'name', '' . "\0" . 'App\\Entity\\PriceCategory' . "\0" . 'contents', '' . "\0" . 'App\\Entity\\PriceCategory' . "\0" . 'priceServices', '' . "\0" . 'App\\Entity\\PriceCategory' . "\0" . 'metaDescriptionTemplate', '' . "\0" . 'App\\Entity\\PriceCategory' . "\0" . 'slug'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PriceCategory $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\PriceCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent(): ?\App\Entity\PriceCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(?\App\Entity\PriceCategory $parent): \App\Entity\PriceCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function getAllChildrenIds(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllChildrenIds', []);

        return parent::getAllChildrenIds();
    }

    /**
     * {@inheritDoc}
     */
    public function fillChildrenServices(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'fillChildrenServices', []);

        parent::fillChildrenServices();
    }

    /**
     * {@inheritDoc}
     */
    public function addChild(\App\Entity\PriceCategory $child): \App\Entity\PriceCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChild', [$child]);

        return parent::addChild($child);
    }

    /**
     * {@inheritDoc}
     */
    public function getContents(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContents', []);

        return parent::getContents();
    }

    /**
     * {@inheritDoc}
     */
    public function addContent(\App\Entity\Service $content): \App\Entity\PriceCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContent', [$content]);

        return parent::addContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function removeContent(\App\Entity\Service $content): \App\Entity\PriceCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeContent', [$content]);

        return parent::removeContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriceServices(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriceServices', []);

        return parent::getPriceServices();
    }

    /**
     * {@inheritDoc}
     */
    public function addPriceService(\App\Entity\PriceService $priceService): \App\Entity\PriceCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPriceService', [$priceService]);

        return parent::addPriceService($priceService);
    }

    /**
     * {@inheritDoc}
     */
    public function removePriceService(\App\Entity\PriceService $priceService): \App\Entity\PriceCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePriceService', [$priceService]);

        return parent::removePriceService($priceService);
    }

    /**
     * {@inheritDoc}
     */
    public function setServiceAtFirstPosition(?\App\Entity\PriceService $price_service)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setServiceAtFirstPosition', [$price_service]);

        return parent::setServiceAtFirstPosition($price_service);
    }

    /**
     * {@inheritDoc}
     */
    public function setPriceForServices(\App\Entity\Content $content, \App\Repository\PriceModelRepository $priceModelRepository)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriceForServices', [$content, $priceModelRepository]);

        return parent::setPriceForServices($content, $priceModelRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function setPathForServices(\App\Entity\Content $content, \App\Repository\RootServiceRepository $rootServiceRepository, \App\Repository\ContentRepository $cr = NULL, \App\Repository\PriceBrandRepository $pbr = NULL, \App\Repository\PriceModelRepository $mr = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPathForServices', [$content, $rootServiceRepository, $cr, $pbr, $mr]);

        return parent::setPathForServices($content, $rootServiceRepository, $cr, $pbr, $mr);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaDescriptionTemplate(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaDescriptionTemplate', []);

        return parent::getMetaDescriptionTemplate();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaDescriptionTemplate(?string $metaDescriptionTemplate): \App\Entity\PriceCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaDescriptionTemplate', [$metaDescriptionTemplate]);

        return parent::setMetaDescriptionTemplate($metaDescriptionTemplate);
    }

    /**
     * {@inheritDoc}
     */
    public function setPathForRootServices(\App\Repository\RootServiceRepository $rootServiceRepository)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPathForRootServices', [$rootServiceRepository]);

        return parent::setPathForRootServices($rootServiceRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug(?string $slug): \App\Entity\PriceCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getFullName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullName', []);

        return parent::getFullName();
    }

}