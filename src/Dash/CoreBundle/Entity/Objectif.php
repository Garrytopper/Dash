<?php

namespace Dash\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ojectif
 *
 * @ORM\Table(name="ojectif")
 * @ORM\Entity(repositoryClass="Dash\CoreBundle\Repository\ObjectifRepository")
 */
class Objectif
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\Column(name="caReel", type="integer", nullable=true)
    */
    private $caReel;

    /**
    * @ORM\Column(name="moment", type="date", unique=true, nullable=false)
    */
    private $moment;

    /**
     * @var int
     *
     * @ORM\Column(name="ca", type="integer")
     */
    private $ca;

    /**
     * @var int
     *
     * @ORM\Column(name="txConcret", type="decimal", precision=2, scale=2)
     */
    private $txConcret;

    /**
     * @var int
     *
     * @ORM\Column(name="panierMoyen", type="integer")
     */
    private $panierMoyen;

    /**
     * @var string
     *
     * @ORM\Column(name="tva", type="decimal", precision=2, scale=2)
     */
    private $tva;

    public function __construct()
    {
        $this->moment = new \Datetime('M');
        $this->ca = 40000;
        $this->txConcret = 0.5;
        $this->panierMoyen = 5000;
        $this->tva = 0.2;
        $this->caReel = 0;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ca
     *
     * @param integer $ca
     *
     * @return Ojectif
     */
    public function setCa($ca)
    {
        $this->ca = $ca;

        return $this;
    }

    /**
     * Get ca
     *
     * @return int
     */
    public function getCa()
    {
        return $this->ca;
    }

    /**
     * Set txConcret
     *
     * @param integer $txConcret
     *
     * @return Ojectif
     */
    public function setTxConcret($txConcret)
    {
        $this->txConcret = $txConcret;

        return $this;
    }

    /**
     * Get txConcret
     *
     * @return int
     */
    public function getTxConcret()
    {
        return $this->txConcret;
    }

    /**
     * Set panierMoyen
     *
     * @param integer $panierMoyen
     *
     * @return Ojectif
     */
    public function setPanierMoyen($panierMoyen)
    {
        $this->panierMoyen = $panierMoyen;

        return $this;
    }

    /**
     * Get panierMoyen
     *
     * @return int
     */
    public function getPanierMoyen()
    {
        return $this->panierMoyen;
    }

    /**
     * Set tva
     *
     * @param string $tva
     *
     * @return Ojectif
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return string
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set moment
     *
     * @param \DateTime $moment
     *
     * @return Objectif
     */
    public function setMoment($moment)
    {
        $this->moment = $moment;

        return $this;
    }

    /**
     * Get moment
     *
     * @return \DateTime
     */
    public function getMoment()
    {
        return $this->moment;
    }

    /**
     * Set caReel
     *
     * @param integer $caReel
     *
     * @return Objectif
     */
    public function setCaReel($caReel)
    {
        $this->caReel = $caReel;

        return $this;
    }

    /**
     * Get caReel
     *
     * @return integer
     */
    public function getCaReel()
    {
        return $this->caReel;
    }
}
