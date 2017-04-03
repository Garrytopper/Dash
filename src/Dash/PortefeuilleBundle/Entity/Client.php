<?php

namespace Dash\PortefeuilleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="Dash\PortefeuilleBundle\Repository\ClientRepository")
 */
class Client
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
    * @ORM\Column(name="dossierOuvert", type="boolean", nullable=true)
    */
    private $DossierOuvert;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date")
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=10, nullable=true)
     */
    private $tel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRdv", type="date")
     */
    private $dateRdv;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var int
     *
     * @ORM\Column(name="budget", type="integer", nullable=true)
     */
    private $budget;

    /**
    * @ORM\Column(name="dateCloture", type="date", nullable=true)
    */
    private $dateCloture;

   

    public function __construct()
    {
        $this->dateCreation = new \Datetime('now');
        $this->dateRdv = new \Datetime('now');
        $this->etat = 'Decouverte';
        $this->dateCloture = null;
        $this->DossierOuvert = false;
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Client
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Client
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set dateRdv
     *
     * @param \DateTime $dateRdv
     *
     * @return Client
     */
    public function setDateRdv($dateRdv)
    {
        $this->dateRdv = $dateRdv;

        return $this;
    }

    /**
     * Get dateRdv
     *
     * @return \DateTime
     */
    public function getDateRdv()
    {
        return $this->dateRdv;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Client
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set budget
     *
     * @param integer $budget
     *
     * @return Client
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return int
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set dateCloture
     *
     * @param \DateTime $dateCloture
     *
     * @return Client
     */
    public function setDateCloture($dateCloture)
    {
        $this->dateCloture = $dateCloture;

        return $this;
    }

    /**
     * Get dateCloture
     *
     * @return \DateTime
     */
    public function getDateCloture()
    {
        return $this->dateCloture;
    }

    /**
     * Set dossierOuvert
     *
     * @param boolean $dossierOuvert
     *
     * @return Client
     */
    public function setDossierOuvert($dossierOuvert)
    {
        $this->DossierOuvert = $dossierOuvert;

        return $this;
    }

    /**
     * Get dossierOuvert
     *
     * @return boolean
     */
    public function getDossierOuvert()
    {
        return $this->DossierOuvert;
    }

}
