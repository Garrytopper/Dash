<?php

namespace Dash\TachesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table(name="task")
 * @ORM\Entity(repositoryClass="Dash\TachesBundle\Repository\TaskRepository")
 */
class Task
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
    * @ORM\ManyToOne(targetEntity="Dash\PortefeuilleBundle\Entity\Client")
    * @ORM\JoinColumn(nullable=true)
    */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="tache", type="string", length=255)
     */
    private $tache;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    public function __construct()
    {
        $this->tache = 'Autre';
        $this->etat = 'Standard';
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
     * Set etat
     *
     * @param string $etat
     *
     * @return Task
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
     * Set tache
     *
     * @param string $tache
     *
     * @return Task
     */
    public function setTache($tache)
    {
        $this->tache = $tache;

        return $this;
    }

    /**
     * Get tache
     *
     * @return string
     */
    public function getTache()
    {
        return $this->tache;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Task
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set client
     *
     * @param \Dash\PortefeuilleBundle\Entity\Client $client
     *
     * @return Task
     */
    public function setClient(\Dash\PortefeuilleBundle\Entity\Client $client = null)
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
}
