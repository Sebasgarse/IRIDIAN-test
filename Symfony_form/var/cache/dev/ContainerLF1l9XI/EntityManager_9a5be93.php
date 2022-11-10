<?php

namespace ContainerLF1l9XI;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderef9cd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8ba7c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties21c5a = [
        
    ];

    public function getConnection()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'getConnection', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'getMetadataFactory', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'getExpressionBuilder', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'beginTransaction', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'getCache', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'transactional', array('func' => $func), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'commit', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->commit();
    }

    public function rollback()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'rollback', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'getClassMetadata', array('className' => $className), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'createQuery', array('dql' => $dql), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'createNamedQuery', array('name' => $name), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'createQueryBuilder', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'flush', array('entity' => $entity), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'clear', array('entityName' => $entityName), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->clear($entityName);
    }

    public function close()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'close', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->close();
    }

    public function persist($entity)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'persist', array('entity' => $entity), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'remove', array('entity' => $entity), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'refresh', array('entity' => $entity), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'detach', array('entity' => $entity), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'merge', array('entity' => $entity), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'contains', array('entity' => $entity), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'getEventManager', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'getConfiguration', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'isOpen', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'getUnitOfWork', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'getProxyFactory', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'initializeObject', array('obj' => $obj), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'getFilters', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'isFiltersStateClean', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'hasFilters', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return $this->valueHolderef9cd->hasFilters();
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

        $instance->initializer8ba7c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderef9cd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderef9cd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderef9cd->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, '__get', ['name' => $name], $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        if (isset(self::$publicProperties21c5a[$name])) {
            return $this->valueHolderef9cd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef9cd;

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

        $targetObject = $this->valueHolderef9cd;
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
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef9cd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderef9cd;
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
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, '__isset', array('name' => $name), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef9cd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderef9cd;
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
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, '__unset', array('name' => $name), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef9cd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderef9cd;
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
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, '__clone', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        $this->valueHolderef9cd = clone $this->valueHolderef9cd;
    }

    public function __sleep()
    {
        $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, '__sleep', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;

        return array('valueHolderef9cd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8ba7c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8ba7c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8ba7c && ($this->initializer8ba7c->__invoke($valueHolderef9cd, $this, 'initializeProxy', array(), $this->initializer8ba7c) || 1) && $this->valueHolderef9cd = $valueHolderef9cd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderef9cd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderef9cd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
