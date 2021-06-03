<?php

namespace ContainerG65bycl;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder20546 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer10748 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb088c = [
        
    ];

    public function getConnection()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'getConnection', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'getMetadataFactory', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'getExpressionBuilder', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'beginTransaction', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'getCache', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->getCache();
    }

    public function transactional($func)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'transactional', array('func' => $func), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->transactional($func);
    }

    public function commit()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'commit', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->commit();
    }

    public function rollback()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'rollback', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'getClassMetadata', array('className' => $className), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'createQuery', array('dql' => $dql), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'createNamedQuery', array('name' => $name), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'createQueryBuilder', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'flush', array('entity' => $entity), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'clear', array('entityName' => $entityName), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->clear($entityName);
    }

    public function close()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'close', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->close();
    }

    public function persist($entity)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'persist', array('entity' => $entity), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'remove', array('entity' => $entity), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'refresh', array('entity' => $entity), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'detach', array('entity' => $entity), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'merge', array('entity' => $entity), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'getRepository', array('entityName' => $entityName), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'contains', array('entity' => $entity), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'getEventManager', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'getConfiguration', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'isOpen', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'getUnitOfWork', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'getProxyFactory', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'initializeObject', array('obj' => $obj), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'getFilters', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'isFiltersStateClean', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'hasFilters', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return $this->valueHolder20546->hasFilters();
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

        $instance->initializer10748 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder20546) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder20546 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder20546->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, '__get', ['name' => $name], $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        if (isset(self::$publicPropertiesb088c[$name])) {
            return $this->valueHolder20546->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20546;

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

        $targetObject = $this->valueHolder20546;
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
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20546;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder20546;
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
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, '__isset', array('name' => $name), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20546;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder20546;
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
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, '__unset', array('name' => $name), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20546;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder20546;
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
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, '__clone', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        $this->valueHolder20546 = clone $this->valueHolder20546;
    }

    public function __sleep()
    {
        $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, '__sleep', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;

        return array('valueHolder20546');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer10748 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer10748;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer10748 && ($this->initializer10748->__invoke($valueHolder20546, $this, 'initializeProxy', array(), $this->initializer10748) || 1) && $this->valueHolder20546 = $valueHolder20546;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder20546;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder20546;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
