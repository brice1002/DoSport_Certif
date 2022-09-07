<?php

namespace ContainerIPbO84Z;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera27b9 = null;
    private $initializer83e9e = null;
    private static $publicProperties08fe7 = [
        
    ];
    public function getConnection()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'getConnection', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'getMetadataFactory', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'getExpressionBuilder', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'beginTransaction', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'getCache', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->getCache();
    }
    public function transactional($func)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'transactional', array('func' => $func), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'wrapInTransaction', array('func' => $func), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'commit', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->commit();
    }
    public function rollback()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'rollback', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'getClassMetadata', array('className' => $className), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'createQuery', array('dql' => $dql), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'createNamedQuery', array('name' => $name), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'createQueryBuilder', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'flush', array('entity' => $entity), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'clear', array('entityName' => $entityName), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->clear($entityName);
    }
    public function close()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'close', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->close();
    }
    public function persist($entity)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'persist', array('entity' => $entity), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'remove', array('entity' => $entity), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'refresh', array('entity' => $entity), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'detach', array('entity' => $entity), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'merge', array('entity' => $entity), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'getRepository', array('entityName' => $entityName), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'contains', array('entity' => $entity), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'getEventManager', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'getConfiguration', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'isOpen', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'getUnitOfWork', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'getProxyFactory', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'initializeObject', array('obj' => $obj), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'getFilters', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'isFiltersStateClean', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'hasFilters', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return $this->valueHoldera27b9->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer83e9e = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera27b9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera27b9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera27b9->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, '__get', ['name' => $name], $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        if (isset(self::$publicProperties08fe7[$name])) {
            return $this->valueHoldera27b9->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera27b9;
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
        $targetObject = $this->valueHoldera27b9;
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
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera27b9;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera27b9;
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
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, '__isset', array('name' => $name), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera27b9;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera27b9;
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
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, '__unset', array('name' => $name), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera27b9;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera27b9;
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
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, '__clone', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        $this->valueHoldera27b9 = clone $this->valueHoldera27b9;
    }
    public function __sleep()
    {
        $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, '__sleep', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
        return array('valueHoldera27b9');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer83e9e = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer83e9e;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer83e9e && ($this->initializer83e9e->__invoke($valueHoldera27b9, $this, 'initializeProxy', array(), $this->initializer83e9e) || 1) && $this->valueHoldera27b9 = $valueHoldera27b9;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera27b9;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera27b9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
