<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder40b68 = null;
    private $initializer16dee = null;
    private static $publicProperties53c28 = [
        
    ];
    public function getConnection()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'getConnection', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'getMetadataFactory', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'getExpressionBuilder', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'beginTransaction', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'getCache', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->getCache();
    }
    public function transactional($func)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'transactional', array('func' => $func), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'wrapInTransaction', array('func' => $func), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'commit', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->commit();
    }
    public function rollback()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'rollback', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'getClassMetadata', array('className' => $className), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'createQuery', array('dql' => $dql), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'createNamedQuery', array('name' => $name), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'createQueryBuilder', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'flush', array('entity' => $entity), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'clear', array('entityName' => $entityName), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->clear($entityName);
    }
    public function close()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'close', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->close();
    }
    public function persist($entity)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'persist', array('entity' => $entity), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'remove', array('entity' => $entity), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'refresh', array('entity' => $entity), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'detach', array('entity' => $entity), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'merge', array('entity' => $entity), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'getRepository', array('entityName' => $entityName), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'contains', array('entity' => $entity), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'getEventManager', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'getConfiguration', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'isOpen', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'getUnitOfWork', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'getProxyFactory', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'initializeObject', array('obj' => $obj), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'getFilters', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'isFiltersStateClean', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'hasFilters', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return $this->valueHolder40b68->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer16dee = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder40b68) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder40b68 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder40b68->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, '__get', ['name' => $name], $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        if (isset(self::$publicProperties53c28[$name])) {
            return $this->valueHolder40b68->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40b68;
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
        $targetObject = $this->valueHolder40b68;
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
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40b68;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder40b68;
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
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, '__isset', array('name' => $name), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40b68;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder40b68;
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
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, '__unset', array('name' => $name), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40b68;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder40b68;
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
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, '__clone', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        $this->valueHolder40b68 = clone $this->valueHolder40b68;
    }
    public function __sleep()
    {
        $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, '__sleep', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
        return array('valueHolder40b68');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer16dee = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer16dee;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer16dee && ($this->initializer16dee->__invoke($valueHolder40b68, $this, 'initializeProxy', array(), $this->initializer16dee) || 1) && $this->valueHolder40b68 = $valueHolder40b68;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder40b68;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder40b68;
    }
}
