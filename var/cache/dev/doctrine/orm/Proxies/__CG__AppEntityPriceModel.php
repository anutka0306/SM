<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PriceModel extends \App\Entity\PriceModel implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'id', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'name', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'class', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'code', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'priceBrand', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'beforeAfterImages', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'nameRus', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'excludedSalons', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'popular', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'type', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'increase', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'image', 'imageFile', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'modifyDate'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'id', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'name', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'class', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'code', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'priceBrand', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'beforeAfterImages', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'nameRus', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'excludedSalons', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'popular', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'type', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'increase', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'image', 'imageFile', '' . "\0" . 'App\\Entity\\PriceModel' . "\0" . 'modifyDate'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PriceModel $proxy) {
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
    public function setName(string $name): \App\Entity\PriceModel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getClass(): ?\App\Entity\PriceClass
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClass', []);

        return parent::getClass();
    }

    /**
     * {@inheritDoc}
     */
    public function setClass(?\App\Entity\PriceClass $class): \App\Entity\PriceModel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClass', [$class]);

        return parent::setClass($class);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', []);

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode(string $code): \App\Entity\PriceModel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', [$code]);

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriceBrand(): ?\App\Entity\PriceBrand
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriceBrand', []);

        return parent::getPriceBrand();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriceBrand(?\App\Entity\PriceBrand $priceBrand): \App\Entity\PriceModel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriceBrand', [$priceBrand]);

        return parent::setPriceBrand($priceBrand);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', []);

        return parent::getPath();
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
    public function getBeforeAfterImages(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBeforeAfterImages', []);

        return parent::getBeforeAfterImages();
    }

    /**
     * {@inheritDoc}
     */
    public function addBeforeAfterImage(\App\Entity\BeforeAfter $beforeAfterImage): \App\Entity\PriceModel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBeforeAfterImage', [$beforeAfterImage]);

        return parent::addBeforeAfterImage($beforeAfterImage);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBeforeAfterImage(\App\Entity\BeforeAfter $beforeAfterImage): \App\Entity\PriceModel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBeforeAfterImage', [$beforeAfterImage]);

        return parent::removeBeforeAfterImage($beforeAfterImage);
    }

    /**
     * {@inheritDoc}
     */
    public function getNameRus(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNameRus', []);

        return parent::getNameRus();
    }

    /**
     * {@inheritDoc}
     */
    public function setNameRus(?string $nameRus): \App\Entity\PriceModel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNameRus', [$nameRus]);

        return parent::setNameRus($nameRus);
    }

    /**
     * {@inheritDoc}
     */
    public function getBrandModelName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrandModelName', []);

        return parent::getBrandModelName();
    }

    /**
     * {@inheritDoc}
     */
    public function getBrandModelWithTranslation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrandModelWithTranslation', []);

        return parent::getBrandModelWithTranslation();
    }

    /**
     * {@inheritDoc}
     */
    public function getExcludedSalons(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExcludedSalons', []);

        return parent::getExcludedSalons();
    }

    /**
     * {@inheritDoc}
     */
    public function addExcludedSalon(\App\Entity\Salon $excludedSalon): \App\Entity\PriceModel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addExcludedSalon', [$excludedSalon]);

        return parent::addExcludedSalon($excludedSalon);
    }

    /**
     * {@inheritDoc}
     */
    public function removeExcludedSalon(\App\Entity\Salon $excludedSalon): \App\Entity\PriceModel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeExcludedSalon', [$excludedSalon]);

        return parent::removeExcludedSalon($excludedSalon);
    }

    /**
     * {@inheritDoc}
     */
    public function getImgFolder(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImgFolder', []);

        return parent::getImgFolder();
    }

    /**
     * {@inheritDoc}
     */
    public function getImgName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImgName', []);

        return parent::getImgName();
    }

    /**
     * {@inheritDoc}
     */
    public function isPopular(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPopular', []);

        return parent::isPopular();
    }

    /**
     * {@inheritDoc}
     */
    public function setPopular(bool $popular): \App\Entity\PriceModel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPopular', [$popular]);

        return parent::setPopular($popular);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(int $type): \App\Entity\PriceModel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeName', []);

        return parent::getTypeName();
    }

    /**
     * {@inheritDoc}
     */
    public function getIncrease(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIncrease', []);

        return parent::getIncrease();
    }

    /**
     * {@inheritDoc}
     */
    public function setIncrease(float $increase): \App\Entity\PriceModel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIncrease', [$increase]);

        return parent::setIncrease($increase);
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFile(\Symfony\Component\HttpFoundation\File\File $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFile', [$image]);

        return parent::setImageFile($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFile', []);

        return parent::getImageFile();
    }

    /**
     * {@inheritDoc}
     */
    public function getImageUrl(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageUrl', []);

        return parent::getImageUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(?string $image): \App\Entity\PriceModel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getModifyDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifyDate', []);

        return parent::getModifyDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setModifyDate(?\DateTimeInterface $modifyDate): \App\Entity\PriceModel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifyDate', [$modifyDate]);

        return parent::setModifyDate($modifyDate);
    }

    /**
     * {@inheritDoc}
     */
    public function changeModifyDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'changeModifyDate', []);

        return parent::changeModifyDate();
    }

}