<?php

namespace emh\cmsPrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Sites
 *
 * @ORM\Table(name="sites")
 * @ORM\Entity
 */
class Sites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
     /**
     * @Gedmo\Slug(fields={"nomFr"})
     * @ORM\Column(type="string")
     */
    protected $slug;
    

    /**
     * @var string
     *
     * @ORM\Column(name="nom_fr", type="string", length=45, nullable=false)
     */
    private $nomFr;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_en", type="string", length=45, nullable=true)
     */
    private $nomEn;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomFr
     *
     * @param string $nomFr
     * @return Sites
     */
    public function setNomFr($nomFr)
    {
        $this->nomFr = $nomFr;

        return $this;
    }

    /**
     * Get nomFr
     *
     * @return string 
     */
    public function getNomFr()
    {
        return $this->nomFr;
    }

    /**
     * Set nomEn
     *
     * @param string $nomEn
     * @return Sites
     */
    public function setNomEn($nomEn)
    {
        $this->nomEn = $nomEn;

        return $this;
    }
    
    /**
     * Get nomEn
     *
     * @return string 
     */
    public function getNomEn()
    {
        return $this->nomEn;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    
    /**
     * Set slug
     *
     * @param string $slug
     * @return Sites
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    
    
    public function __toString() {
    return $this->nomFr;
 
}
}
