<?php

namespace Dash\DventeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Dash\PortefeuilleBundle\Entity\Client;

/**
 * Dossier
 *
 * @ORM\Table(name="dossier")
 * @ORM\Entity(repositoryClass="Dash\DventeBundle\Repository\DossierRepository")
 */
class Dossier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
    * @ORM\OneToOne(targetEntity="Dash\PortefeuilleBundle\Entity\Client", cascade={"persist", "remove"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $client;

    /**
    * @ORM\Column(name="etatDossier", type="string", nullable=false)
    */
    private $etatDossier;

    /**
    * @ORM\Column(name="dateCreation", type="date", nullable=false)
    */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=255)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var bool
     *
     * @ORM\Column(name="rcheque", type="boolean", nullable=true)
     */
    private $rcheque;

    /**
     * @var bool
     *
     * @ORM\Column(name="chgranite", type="boolean", nullable=true)
     */
    private $chgranite;

    /**
     * @ORM\OneToOne(targetEntity="Dash\CoreBundle\Entity\Document", cascade={"persist", "remove"})
     */
    private $document;

    /**
     * @var string
     *
     * @ORM\Column(name="prestpose", type="string", length=255)
     */
    private $prestpose;

    /**
     * @var string
     *
     * @ORM\Column(name="prestliv", type="string", length=255)
     */
    private $prestliv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateliv", type="datetime")
     */
    private $dateliv;

    public function __construct(CLIENT $client)
    {
        $this->dateCreation = new \Datetime('now');
        $this->dateliv = new \Datetime('now + 8 weeks');
        $this->etatDossier = "Plan Tech à faire";
        $this->client =  $client;
        $this->id = $this->client->getId();
        $this->rcheque = false;
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
     * Set rue
     *
     * @param string $rue
     *
     * @return Dossier
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Dossier
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Dossier
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Dossier
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set rcheque
     *
     * @param boolean $rcheque
     *
     * @return Dossier
     */
    public function setRcheque($rcheque)
    {
        $this->rcheque = $rcheque;

        return $this;
    }

    /**
     * Get rcheque
     *
     * @return bool
     */
    public function getRcheque()
    {
        return $this->rcheque;
    }

    /**
     * Set chgranite
     *
     * @param boolean $chgranite
     *
     * @return Dossier
     */
    public function setChgranite($chgranite)
    {
        $this->chgranite = $chgranite;

        return $this;
    }

    /**
     * Get chgranite
     *
     * @return bool
     */
    public function getChgranite()
    {
        return $this->chgranite;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Dossier
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set prestpose
     *
     * @param string $prestpose
     *
     * @return Dossier
     */
    public function setPrestpose($prestpose)
    {
        $this->prestpose = $prestpose;

        return $this;
    }

    /**
     * Get prestpose
     *
     * @return string
     */
    public function getPrestpose()
    {
        return $this->prestpose;
    }

    /**
     * Set prestliv
     *
     * @param string $prestliv
     *
     * @return Dossier
     */
    public function setPrestliv($prestliv)
    {
        $this->prestliv = $prestliv;

        return $this;
    }

    /**
     * Get prestliv
     *
     * @return string
     */
    public function getPrestliv()
    {
        return $this->prestliv;
    }

    /**
     * Set dateliv
     *
     * @param \DateTime $dateliv
     *
     * @return Dossier
     */
    public function setDateliv($dateliv)
    {
        $this->dateliv = $dateliv;

        return $this;
    }

    /**
     * Get dateliv
     *
     * @return \DateTime
     */
    public function getDateliv()
    {
        return $this->dateliv;
    }

    /**
     * Set dateCreation
     *
     * @param \Datetime $dateCreation
     *
     * @return Dossier
     */
    public function setDateCreation(\Datetime $dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \Datetime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }


    /**
     * Set client
     *
     * @param \Dash\PortefeuilleBundle\Entity\Client $client
     *
     * @return Dossier
     */
    public function setClient(\Dash\PortefeuilleBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Dash\PortefeuilleBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set etatDossier
     *
     * @param string $etatDossier
     *
     * @return Dossier
     */
    public function setEtatDossier($etatDossier)
    {
        $this->etatDossier = $etatDossier;

        return $this;
    }

    /**
     * Get etatDossier
     *
     * @return string
     */
    public function getEtatDossier()
    {
        return $this->etatDossier;
    }
}
