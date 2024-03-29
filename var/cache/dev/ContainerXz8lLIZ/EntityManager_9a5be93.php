<?php

namespace ContainerXz8lLIZ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf311c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer78c32 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfc7bd = [
        
    ];

    public function getConnection()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'getConnection', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'getMetadataFactory', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'getExpressionBuilder', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'beginTransaction', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'getCache', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'transactional', array('func' => $func), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->transactional($func);
    }

    public function commit()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'commit', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->commit();
    }

    public function rollback()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'rollback', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'getClassMetadata', array('className' => $className), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'createQuery', array('dql' => $dql), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'createNamedQuery', array('name' => $name), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'createQueryBuilder', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'flush', array('entity' => $entity), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'clear', array('entityName' => $entityName), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->clear($entityName);
    }

    public function close()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'close', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->close();
    }

    public function persist($entity)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'persist', array('entity' => $entity), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'remove', array('entity' => $entity), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'refresh', array('entity' => $entity), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'detach', array('entity' => $entity), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'merge', array('entity' => $entity), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'contains', array('entity' => $entity), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'getEventManager', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'getConfiguration', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'isOpen', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'getUnitOfWork', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'getProxyFactory', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'initializeObject', array('obj' => $obj), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'getFilters', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'isFiltersStateClean', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'hasFilters', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return $this->valueHolderf311c->hasFilters();
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

        $instance->initializer78c32 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf311c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf311c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf311c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, '__get', ['name' => $name], $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        if (isset(self::$publicPropertiesfc7bd[$name])) {
            return $this->valueHolderf311c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf311c;

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

        $targetObject = $this->valueHolderf311c;
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
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf311c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf311c;
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
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, '__isset', array('name' => $name), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf311c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf311c;
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
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, '__unset', array('name' => $name), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf311c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf311c;
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
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, '__clone', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        $this->valueHolderf311c = clone $this->valueHolderf311c;
    }

    public function __sleep()
    {
        $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, '__sleep', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;

        return array('valueHolderf311c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer78c32 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer78c32;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer78c32 && ($this->initializer78c32->__invoke($valueHolderf311c, $this, 'initializeProxy', array(), $this->initializer78c32) || 1) && $this->valueHolderf311c = $valueHolderf311c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf311c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf311c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
