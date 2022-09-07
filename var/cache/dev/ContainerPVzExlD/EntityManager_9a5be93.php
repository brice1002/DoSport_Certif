<?php

namespace ContainerPVzExlD;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderee7a8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer48382 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb96e0 = [
        
    ];

    public function getConnection()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'getConnection', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'getMetadataFactory', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'getExpressionBuilder', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'beginTransaction', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'getCache', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->getCache();
    }

    public function transactional($func)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'transactional', array('func' => $func), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'wrapInTransaction', array('func' => $func), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'commit', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->commit();
    }

    public function rollback()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'rollback', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'getClassMetadata', array('className' => $className), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'createQuery', array('dql' => $dql), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'createNamedQuery', array('name' => $name), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'createQueryBuilder', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'flush', array('entity' => $entity), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'clear', array('entityName' => $entityName), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->clear($entityName);
    }

    public function close()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'close', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->close();
    }

    public function persist($entity)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'persist', array('entity' => $entity), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'remove', array('entity' => $entity), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'refresh', array('entity' => $entity), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'detach', array('entity' => $entity), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'merge', array('entity' => $entity), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'contains', array('entity' => $entity), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'getEventManager', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'getConfiguration', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'isOpen', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'getUnitOfWork', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'getProxyFactory', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'initializeObject', array('obj' => $obj), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'getFilters', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'isFiltersStateClean', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'hasFilters', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return $this->valueHolderee7a8->hasFilters();
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

        $instance->initializer48382 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderee7a8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderee7a8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderee7a8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, '__get', ['name' => $name], $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        if (isset(self::$publicPropertiesb96e0[$name])) {
            return $this->valueHolderee7a8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee7a8;

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

        $targetObject = $this->valueHolderee7a8;
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
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee7a8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderee7a8;
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
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, '__isset', array('name' => $name), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee7a8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderee7a8;
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
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, '__unset', array('name' => $name), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee7a8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderee7a8;
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
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, '__clone', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        $this->valueHolderee7a8 = clone $this->valueHolderee7a8;
    }

    public function __sleep()
    {
        $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, '__sleep', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;

        return array('valueHolderee7a8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer48382 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer48382;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer48382 && ($this->initializer48382->__invoke($valueHolderee7a8, $this, 'initializeProxy', array(), $this->initializer48382) || 1) && $this->valueHolderee7a8 = $valueHolderee7a8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderee7a8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderee7a8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
