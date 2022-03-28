<?php

namespace ContainerUqqwss7;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc75e4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer24540 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesac5e3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'getConnection', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'getMetadataFactory', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'getExpressionBuilder', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'beginTransaction', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'getCache', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->getCache();
    }

    public function transactional($func)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'transactional', array('func' => $func), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'wrapInTransaction', array('func' => $func), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'commit', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->commit();
    }

    public function rollback()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'rollback', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'getClassMetadata', array('className' => $className), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'createQuery', array('dql' => $dql), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'createNamedQuery', array('name' => $name), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'createQueryBuilder', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'flush', array('entity' => $entity), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'clear', array('entityName' => $entityName), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->clear($entityName);
    }

    public function close()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'close', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->close();
    }

    public function persist($entity)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'persist', array('entity' => $entity), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'remove', array('entity' => $entity), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'refresh', array('entity' => $entity), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'detach', array('entity' => $entity), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'merge', array('entity' => $entity), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'contains', array('entity' => $entity), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'getEventManager', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'getConfiguration', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'isOpen', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'getUnitOfWork', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'getProxyFactory', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'initializeObject', array('obj' => $obj), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'getFilters', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'isFiltersStateClean', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'hasFilters', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return $this->valueHolderc75e4->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer24540 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc75e4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc75e4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc75e4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, '__get', ['name' => $name], $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        if (isset(self::$publicPropertiesac5e3[$name])) {
            return $this->valueHolderc75e4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc75e4;

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

        $targetObject = $this->valueHolderc75e4;
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
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc75e4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc75e4;
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
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, '__isset', array('name' => $name), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc75e4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc75e4;
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
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, '__unset', array('name' => $name), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc75e4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc75e4;
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
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, '__clone', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        $this->valueHolderc75e4 = clone $this->valueHolderc75e4;
    }

    public function __sleep()
    {
        $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, '__sleep', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;

        return array('valueHolderc75e4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer24540 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer24540;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer24540 && ($this->initializer24540->__invoke($valueHolderc75e4, $this, 'initializeProxy', array(), $this->initializer24540) || 1) && $this->valueHolderc75e4 = $valueHolderc75e4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc75e4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc75e4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
