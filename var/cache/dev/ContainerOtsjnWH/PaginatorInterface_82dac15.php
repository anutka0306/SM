<?php

namespace ContainerOtsjnWH;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{

    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercbf56 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2431c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2bef3 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer2431c && ($this->initializer2431c->__invoke($valueHoldercbf56, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer2431c) || 1) && $this->valueHoldercbf56 = $valueHoldercbf56;

        if ($this->valueHoldercbf56 === $returnValue = $this->valueHoldercbf56->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializer2431c = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldercbf56) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldercbf56 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer2431c && ($this->initializer2431c->__invoke($valueHoldercbf56, $this, '__get', ['name' => $name], $this->initializer2431c) || 1) && $this->valueHoldercbf56 = $valueHoldercbf56;

        if (isset(self::$publicProperties2bef3[$name])) {
            return $this->valueHoldercbf56->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercbf56;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercbf56;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer2431c && ($this->initializer2431c->__invoke($valueHoldercbf56, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2431c) || 1) && $this->valueHoldercbf56 = $valueHoldercbf56;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercbf56;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercbf56;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer2431c && ($this->initializer2431c->__invoke($valueHoldercbf56, $this, '__isset', array('name' => $name), $this->initializer2431c) || 1) && $this->valueHoldercbf56 = $valueHoldercbf56;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercbf56;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercbf56;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer2431c && ($this->initializer2431c->__invoke($valueHoldercbf56, $this, '__unset', array('name' => $name), $this->initializer2431c) || 1) && $this->valueHoldercbf56 = $valueHoldercbf56;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercbf56;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercbf56;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer2431c && ($this->initializer2431c->__invoke($valueHoldercbf56, $this, '__clone', array(), $this->initializer2431c) || 1) && $this->valueHoldercbf56 = $valueHoldercbf56;

        $this->valueHoldercbf56 = clone $this->valueHoldercbf56;
    }

    public function __sleep()
    {
        $this->initializer2431c && ($this->initializer2431c->__invoke($valueHoldercbf56, $this, '__sleep', array(), $this->initializer2431c) || 1) && $this->valueHoldercbf56 = $valueHoldercbf56;

        return array('valueHoldercbf56');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2431c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2431c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2431c && ($this->initializer2431c->__invoke($valueHoldercbf56, $this, 'initializeProxy', array(), $this->initializer2431c) || 1) && $this->valueHoldercbf56 = $valueHoldercbf56;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercbf56;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercbf56;
    }


}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
