<?php

namespace Container4nzO1Hb;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6b885 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer36af6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties257ad = [
        
    ];

    public function getConnection()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'getConnection', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'getMetadataFactory', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'getExpressionBuilder', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'beginTransaction', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'getCache', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->getCache();
    }

    public function transactional($func)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'transactional', array('func' => $func), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->transactional($func);
    }

    public function commit()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'commit', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->commit();
    }

    public function rollback()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'rollback', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'getClassMetadata', array('className' => $className), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'createQuery', array('dql' => $dql), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'createNamedQuery', array('name' => $name), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'createQueryBuilder', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'flush', array('entity' => $entity), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'clear', array('entityName' => $entityName), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->clear($entityName);
    }

    public function close()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'close', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->close();
    }

    public function persist($entity)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'persist', array('entity' => $entity), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'remove', array('entity' => $entity), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'refresh', array('entity' => $entity), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'detach', array('entity' => $entity), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'merge', array('entity' => $entity), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'getRepository', array('entityName' => $entityName), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'contains', array('entity' => $entity), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'getEventManager', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'getConfiguration', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'isOpen', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'getUnitOfWork', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'getProxyFactory', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'initializeObject', array('obj' => $obj), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'getFilters', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'isFiltersStateClean', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'hasFilters', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return $this->valueHolder6b885->hasFilters();
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

        $instance->initializer36af6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6b885) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6b885 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6b885->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, '__get', ['name' => $name], $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        if (isset(self::$publicProperties257ad[$name])) {
            return $this->valueHolder6b885->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b885;

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

        $targetObject = $this->valueHolder6b885;
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
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b885;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6b885;
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
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, '__isset', array('name' => $name), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b885;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6b885;
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
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, '__unset', array('name' => $name), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b885;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6b885;
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
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, '__clone', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        $this->valueHolder6b885 = clone $this->valueHolder6b885;
    }

    public function __sleep()
    {
        $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, '__sleep', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;

        return array('valueHolder6b885');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer36af6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer36af6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer36af6 && ($this->initializer36af6->__invoke($valueHolder6b885, $this, 'initializeProxy', array(), $this->initializer36af6) || 1) && $this->valueHolder6b885 = $valueHolder6b885;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6b885;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6b885;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
