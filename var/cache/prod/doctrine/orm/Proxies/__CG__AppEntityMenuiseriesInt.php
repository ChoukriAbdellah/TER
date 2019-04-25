<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class MenuiseriesInt extends \App\Entity\MenuiseriesInt implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'id', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'portesPleines', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'portesVitrees', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'portesBattantes', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'portesCoulissantes', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'portesPlacardPliantes', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'portesPlacardBattantes', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'portesPlacardCoulissantes', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'materieauRampes', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'tailleRampes', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'materieauBalustrades', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'tailleBalustrades', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'prix'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'id', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'portesPleines', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'portesVitrees', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'portesBattantes', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'portesCoulissantes', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'portesPlacardPliantes', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'portesPlacardBattantes', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'portesPlacardCoulissantes', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'materieauRampes', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'tailleRampes', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'materieauBalustrades', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'tailleBalustrades', '' . "\0" . 'App\\Entity\\MenuiseriesInt' . "\0" . 'prix'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (MenuiseriesInt $proxy) {
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
    public function getPortesPleines(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPortesPleines', []);

        return parent::getPortesPleines();
    }

    /**
     * {@inheritDoc}
     */
    public function setPortesPleines(int $portesPleines): \App\Entity\MenuiseriesInt
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPortesPleines', [$portesPleines]);

        return parent::setPortesPleines($portesPleines);
    }

    /**
     * {@inheritDoc}
     */
    public function getPortesVitrees(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPortesVitrees', []);

        return parent::getPortesVitrees();
    }

    /**
     * {@inheritDoc}
     */
    public function setPortesVitrees(int $portesVitrees): \App\Entity\MenuiseriesInt
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPortesVitrees', [$portesVitrees]);

        return parent::setPortesVitrees($portesVitrees);
    }

    /**
     * {@inheritDoc}
     */
    public function getPortesBattantes(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPortesBattantes', []);

        return parent::getPortesBattantes();
    }

    /**
     * {@inheritDoc}
     */
    public function setPortesBattantes(int $portesBattantes): \App\Entity\MenuiseriesInt
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPortesBattantes', [$portesBattantes]);

        return parent::setPortesBattantes($portesBattantes);
    }

    /**
     * {@inheritDoc}
     */
    public function getPortesCoulissantes(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPortesCoulissantes', []);

        return parent::getPortesCoulissantes();
    }

    /**
     * {@inheritDoc}
     */
    public function setPortesCoulissantes(int $portesCoulissantes): \App\Entity\MenuiseriesInt
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPortesCoulissantes', [$portesCoulissantes]);

        return parent::setPortesCoulissantes($portesCoulissantes);
    }

    /**
     * {@inheritDoc}
     */
    public function getPortesPlacardPliantes(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPortesPlacardPliantes', []);

        return parent::getPortesPlacardPliantes();
    }

    /**
     * {@inheritDoc}
     */
    public function setPortesPlacardPliantes(int $portesPlacardPliantes): \App\Entity\MenuiseriesInt
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPortesPlacardPliantes', [$portesPlacardPliantes]);

        return parent::setPortesPlacardPliantes($portesPlacardPliantes);
    }

    /**
     * {@inheritDoc}
     */
    public function getPortesPlacardBattantes(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPortesPlacardBattantes', []);

        return parent::getPortesPlacardBattantes();
    }

    /**
     * {@inheritDoc}
     */
    public function setPortesPlacardBattantes(int $portesPlacardBattantes): \App\Entity\MenuiseriesInt
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPortesPlacardBattantes', [$portesPlacardBattantes]);

        return parent::setPortesPlacardBattantes($portesPlacardBattantes);
    }

    /**
     * {@inheritDoc}
     */
    public function getPortesPlacardCoulissantes(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPortesPlacardCoulissantes', []);

        return parent::getPortesPlacardCoulissantes();
    }

    /**
     * {@inheritDoc}
     */
    public function setPortesPlacardCoulissantes(int $portesPlacardCoulissantes): \App\Entity\MenuiseriesInt
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPortesPlacardCoulissantes', [$portesPlacardCoulissantes]);

        return parent::setPortesPlacardCoulissantes($portesPlacardCoulissantes);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaterieauRampes(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaterieauRampes', []);

        return parent::getMaterieauRampes();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaterieauRampes(string $materieauRampes): \App\Entity\MenuiseriesInt
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaterieauRampes', [$materieauRampes]);

        return parent::setMaterieauRampes($materieauRampes);
    }

    /**
     * {@inheritDoc}
     */
    public function getTailleRampes(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTailleRampes', []);

        return parent::getTailleRampes();
    }

    /**
     * {@inheritDoc}
     */
    public function setTailleRampes(float $tailleRampes): \App\Entity\MenuiseriesInt
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTailleRampes', [$tailleRampes]);

        return parent::setTailleRampes($tailleRampes);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaterieauBalustrades(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaterieauBalustrades', []);

        return parent::getMaterieauBalustrades();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaterieauBalustrades(string $materieauBalustrades): \App\Entity\MenuiseriesInt
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaterieauBalustrades', [$materieauBalustrades]);

        return parent::setMaterieauBalustrades($materieauBalustrades);
    }

    /**
     * {@inheritDoc}
     */
    public function getTailleBalustrades(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTailleBalustrades', []);

        return parent::getTailleBalustrades();
    }

    /**
     * {@inheritDoc}
     */
    public function setTailleBalustrades(float $tailleBalustrades): \App\Entity\MenuiseriesInt
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTailleBalustrades', [$tailleBalustrades]);

        return parent::setTailleBalustrades($tailleBalustrades);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix(float $prix): \App\Entity\MenuiseriesInt
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

}
