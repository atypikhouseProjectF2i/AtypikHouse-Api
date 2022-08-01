<?php

namespace ContainerT5oTxGx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0613b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc4cc9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfe813 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'getConnection', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'getMetadataFactory', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'getExpressionBuilder', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'beginTransaction', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'getCache', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'transactional', array('func' => $func), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'commit', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->commit();
    }

    public function rollback()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'rollback', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'getClassMetadata', array('className' => $className), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'createQuery', array('dql' => $dql), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'createNamedQuery', array('name' => $name), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'createQueryBuilder', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'flush', array('entity' => $entity), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'clear', array('entityName' => $entityName), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->clear($entityName);
    }

    public function close()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'close', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->close();
    }

    public function persist($entity)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'persist', array('entity' => $entity), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'remove', array('entity' => $entity), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'refresh', array('entity' => $entity), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'detach', array('entity' => $entity), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'merge', array('entity' => $entity), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'contains', array('entity' => $entity), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'getEventManager', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'getConfiguration', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'isOpen', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'getUnitOfWork', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'getProxyFactory', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'initializeObject', array('obj' => $obj), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'getFilters', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'isFiltersStateClean', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'hasFilters', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return $this->valueHolder0613b->hasFilters();
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

        $instance->initializerc4cc9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0613b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0613b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0613b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, '__get', ['name' => $name], $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        if (isset(self::$publicPropertiesfe813[$name])) {
            return $this->valueHolder0613b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0613b;

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

        $targetObject = $this->valueHolder0613b;
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
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0613b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0613b;
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
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, '__isset', array('name' => $name), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0613b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0613b;
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
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, '__unset', array('name' => $name), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0613b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0613b;
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
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, '__clone', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        $this->valueHolder0613b = clone $this->valueHolder0613b;
    }

    public function __sleep()
    {
        $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, '__sleep', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;

        return array('valueHolder0613b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc4cc9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc4cc9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc4cc9 && ($this->initializerc4cc9->__invoke($valueHolder0613b, $this, 'initializeProxy', array(), $this->initializerc4cc9) || 1) && $this->valueHolder0613b = $valueHolder0613b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0613b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0613b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
