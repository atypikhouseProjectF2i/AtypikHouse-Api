<?php

namespace ContainerOoTy2Kg;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera8062 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere68e1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties07c7c = [
        
    ];

    public function getConnection()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'getConnection', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'getMetadataFactory', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'getExpressionBuilder', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'beginTransaction', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'getCache', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->getCache();
    }

    public function transactional($func)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'transactional', array('func' => $func), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'wrapInTransaction', array('func' => $func), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'commit', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->commit();
    }

    public function rollback()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'rollback', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'getClassMetadata', array('className' => $className), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'createQuery', array('dql' => $dql), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'createNamedQuery', array('name' => $name), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'createQueryBuilder', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'flush', array('entity' => $entity), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'clear', array('entityName' => $entityName), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->clear($entityName);
    }

    public function close()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'close', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->close();
    }

    public function persist($entity)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'persist', array('entity' => $entity), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'remove', array('entity' => $entity), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'refresh', array('entity' => $entity), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'detach', array('entity' => $entity), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'merge', array('entity' => $entity), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'getRepository', array('entityName' => $entityName), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'contains', array('entity' => $entity), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'getEventManager', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'getConfiguration', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'isOpen', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'getUnitOfWork', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'getProxyFactory', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'initializeObject', array('obj' => $obj), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'getFilters', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'isFiltersStateClean', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'hasFilters', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return $this->valueHoldera8062->hasFilters();
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

        $instance->initializere68e1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera8062) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera8062 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera8062->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, '__get', ['name' => $name], $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        if (isset(self::$publicProperties07c7c[$name])) {
            return $this->valueHoldera8062->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8062;

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

        $targetObject = $this->valueHoldera8062;
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
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8062;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera8062;
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
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, '__isset', array('name' => $name), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8062;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera8062;
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
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, '__unset', array('name' => $name), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8062;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera8062;
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
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, '__clone', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        $this->valueHoldera8062 = clone $this->valueHoldera8062;
    }

    public function __sleep()
    {
        $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, '__sleep', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;

        return array('valueHoldera8062');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere68e1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere68e1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere68e1 && ($this->initializere68e1->__invoke($valueHoldera8062, $this, 'initializeProxy', array(), $this->initializere68e1) || 1) && $this->valueHoldera8062 = $valueHoldera8062;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera8062;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera8062;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
