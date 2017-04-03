<?php

namespace Dash\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="Dash\CoreBundle\Repository\DocumentRepository")
 * 
 */
class Document
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
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

    private $tempfile;

    private $file;


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
     * Set url
     *
     * @param string $url
     *
     * @return Document
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return Document
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    
    public function setFile(UPLOADEDFILE $uploadedFile)
    {
        $this->file = $uploadedFile;

        return $this;
    }

    public function getFile()
    {
        return $this->file;
    }

    /**
    * @ORM\PrePersist()
    * @ORM\PreUpdate()
    */
    public function preUpload()
    {
        if ($this->file === null) {
            return ;
        }
        $this->url = $this->file->getClientOriginalName();
        $this->alt = $this->file->getClientOriginalName();
    }

    /**
    * @ORM\PostPersist()
    * @ORM\PostUpdate()
    */
    public function postUpload()
    {
        if (null === $this->file) {
            return ;
        }
        if (condition) {
            # code...
        }

        $this->file->move($this->absoluteRoot(), $this->file->getClientOriginalName());
    }

    

    public function upload()
    {
        if ($this->file === null) {
            return ;
        }
        $name = $this->file->getClientOriginalName();
        $this->file->move($this->absoluteRoot(), $name);
        $this->url = $name;
        $this->alt = $name;
    }

    public function absoluteRoot()
    {
        return __DIR__.'/../../../../web/'.$this->relativeRoot();
    }

    public function relativeRoot()
    {
        return 'uploads';
    }

}

