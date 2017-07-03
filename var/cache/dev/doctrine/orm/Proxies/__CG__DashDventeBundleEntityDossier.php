<?php

namespace Proxies\__CG__\Dash\DventeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Dossier extends \Dash\DventeBundle\Entity\Dossier implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'id', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'client', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'etatDossier', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'dateCreation', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'rue', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'ville', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'cp', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'email', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'rcheque', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'chgranite', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'prestpose', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'prestliv', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'dateliv'];
        }

        return ['__isInitialized__', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'id', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'client', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'etatDossier', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'dateCreation', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'rue', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'ville', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'cp', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'email', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'rcheque', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'chgranite', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'prestpose', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'prestliv', '' . "\0" . 'Dash\\DventeBundle\\Entity\\Dossier' . "\0" . 'dateliv'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Dossier $proxy) {
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
    public function getId()
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
    public function setRue($rue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRue', [$rue]);

        return parent::setRue($rue);
    }

    /**
     * {@inheritDoc}
     */
    public function getRue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRue', []);

        return parent::getRue();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille($ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setCp($cp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCp', [$cp]);

        return parent::setCp($cp);
    }

    /**
     * {@inheritDoc}
     */
    public function getCp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCp', []);

        return parent::getCp();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setRcheque($rcheque)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRcheque', [$rcheque]);

        return parent::setRcheque($rcheque);
    }

    /**
     * {@inheritDoc}
     */
    public function getRcheque()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRcheque', []);

        return parent::getRcheque();
    }

    /**
     * {@inheritDoc}
     */
    public function setChgranite($chgranite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChgranite', [$chgranite]);

        return parent::setChgranite($chgranite);
    }

    /**
     * {@inheritDoc}
     */
    public function getChgranite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChgranite', []);

        return parent::getChgranite();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrestpose($prestpose)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrestpose', [$prestpose]);

        return parent::setPrestpose($prestpose);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrestpose()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrestpose', []);

        return parent::getPrestpose();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrestliv($prestliv)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrestliv', [$prestliv]);

        return parent::setPrestliv($prestliv);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrestliv()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrestliv', []);

        return parent::getPrestliv();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateliv($dateliv)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateliv', [$dateliv]);

        return parent::setDateliv($dateliv);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateliv()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateliv', []);

        return parent::getDateliv();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreation(\DateTime $dateCreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreation', [$dateCreation]);

        return parent::setDateCreation($dateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreation', []);

        return parent::getDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setClient(\Dash\PortefeuilleBundle\Entity\Client $client)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClient', [$client]);

        return parent::setClient($client);
    }

    /**
     * {@inheritDoc}
     */
    public function getClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClient', []);

        return parent::getClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtatDossier($etatDossier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtatDossier', [$etatDossier]);

        return parent::setEtatDossier($etatDossier);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtatDossier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtatDossier', []);

        return parent::getEtatDossier();
    }

}
