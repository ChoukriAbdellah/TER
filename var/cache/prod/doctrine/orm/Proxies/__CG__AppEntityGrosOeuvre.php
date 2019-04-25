<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class GrosOeuvre extends \App\Entity\GrosOeuvre implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'id', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idEtudeSol', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idPrepTerrain', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idExcavation', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idFondations', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idSoubassement', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idVRD', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idPlancher', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idElevation', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idCharpente', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idToiture', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idMenuiseriesExt'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'id', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idEtudeSol', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idPrepTerrain', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idExcavation', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idFondations', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idSoubassement', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idVRD', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idPlancher', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idElevation', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idCharpente', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idToiture', '' . "\0" . 'App\\Entity\\GrosOeuvre' . "\0" . 'idMenuiseriesExt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (GrosOeuvre $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdEtudeSol(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEtudeSol', []);

        return parent::getIdEtudeSol();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdEtudeSol(?int $idEtudeSol): \App\Entity\GrosOeuvre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdEtudeSol', [$idEtudeSol]);

        return parent::setIdEtudeSol($idEtudeSol);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdPrepTerrain(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdPrepTerrain', []);

        return parent::getIdPrepTerrain();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdPrepTerrain(?int $idPrepTerrain): \App\Entity\GrosOeuvre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdPrepTerrain', [$idPrepTerrain]);

        return parent::setIdPrepTerrain($idPrepTerrain);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdExcavation(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdExcavation', []);

        return parent::getIdExcavation();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdExcavation(?int $idExcavation): \App\Entity\GrosOeuvre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdExcavation', [$idExcavation]);

        return parent::setIdExcavation($idExcavation);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdFondations(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdFondations', []);

        return parent::getIdFondations();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdFondations(?int $idFondations): \App\Entity\GrosOeuvre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdFondations', [$idFondations]);

        return parent::setIdFondations($idFondations);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdSoubassement(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSoubassement', []);

        return parent::getIdSoubassement();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdSoubassement(?int $idSoubassement): \App\Entity\GrosOeuvre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdSoubassement', [$idSoubassement]);

        return parent::setIdSoubassement($idSoubassement);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdVRD(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdVRD', []);

        return parent::getIdVRD();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdVRD(?int $idVRD): \App\Entity\GrosOeuvre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdVRD', [$idVRD]);

        return parent::setIdVRD($idVRD);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdPlancher(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdPlancher', []);

        return parent::getIdPlancher();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdPlancher(?int $idPlancher): \App\Entity\GrosOeuvre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdPlancher', [$idPlancher]);

        return parent::setIdPlancher($idPlancher);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdElevation(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdElevation', []);

        return parent::getIdElevation();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdElevation(?int $idElevation): \App\Entity\GrosOeuvre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdElevation', [$idElevation]);

        return parent::setIdElevation($idElevation);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCharpente(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCharpente', []);

        return parent::getIdCharpente();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCharpente(?int $idCharpente): \App\Entity\GrosOeuvre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCharpente', [$idCharpente]);

        return parent::setIdCharpente($idCharpente);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdToiture(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdToiture', []);

        return parent::getIdToiture();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdToiture(?int $idToiture): \App\Entity\GrosOeuvre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdToiture', [$idToiture]);

        return parent::setIdToiture($idToiture);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdMenuiseriesExt(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdMenuiseriesExt', []);

        return parent::getIdMenuiseriesExt();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdMenuiseriesExt(?int $idMenuiseriesExt): \App\Entity\GrosOeuvre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdMenuiseriesExt', [$idMenuiseriesExt]);

        return parent::setIdMenuiseriesExt($idMenuiseriesExt);
    }

}
