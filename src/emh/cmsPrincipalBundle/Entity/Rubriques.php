<?php

namespace emh\cmsPrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Rubriques
 *
 * @ORM\Table(name="rubriques", indexes={@ORM\Index(name="fk_rubriques_sites1_idx", columns={"sites_id"})})
 * @ORM\Entity
 */
class Rubriques {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

       
    /**
     * @Gedmo\Slug(fields={"nomFr"})
     * @ORM\Column(type="string")
     */
    protected $slugFr;
    
    /**
     * @Gedmo\Slug(fields={"nomEn"})
     * @ORM\Column(type="string")
     */
    protected $slugEn;
    

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
     * @var \Sites
     *
     * @ORM\ManyToOne(targetEntity="Sites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sites_id", referencedColumnName="id")
     * })
     */
    private $sites;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="choixFormation", type="boolean", nullable=true)
     */
    
    private $choixFormation;
    
     /**
     * @var boolean
     *
     * @ORM\Column(name="choixProduit", type="boolean", nullable=true)
     */
    
    private $choixProduit;
    
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set slugFr
     *
     * @param string $slug
     * @return Rubriques
     */
    public function setSlugFr($slugFr) {
       $this->slug = $slugFr;
    }

    /**
     * Get slugFr
     *
     * @return string 
     */
    public function getSlugFr() {
        return $this->slugFr;
    }
    
    /**
     * Set slugEn
     *
     * @param string $slug
     * @return Rubriques
     */
    public function setSlugEn($slugEn) {
       $this->slugEn = $slugEn;
    }

    /**
     * Get slugFr
     *
     * @return string 
     */
    public function getSlugEn() {
        return $this->slugEn;
    }
     /**
     * Set nomFr
     *
     * @param string $nomFr
     * @return Rubriques
     */
    public function setNomFR($nomFr) {
        $this->nomFr = $nomFr;

        

        return $this;
    }

    /**
     * Get nomFr
     *
     * @return string 
     */
    public function getNomFr() {
        return $this->nomFr;
    }

    /**
     * Set nomEn
     *
     * @param string $nomEn
     * @return Rubriques
     */
    public function setNomEn($nomEn) {
        $this->nomEn = $nomEn;

        

        return $this;
    }

    /**
     * Get nomEn
     *
     * @return string 
     */
    public function getNomEn() {
        return $this->nomEn;
    }
    
     /**
     * Get choixFormation
     *
     * @return boolean 
     */
      public function setChoixFormation($choixFormation) {
        $this->choixFormation = $choixFormation;

        

        return $this;
    }

    /**
     * Get choixFormation
     *
     * @return boolean 
     */
    public function getChoixFormation() {
        return $this->choixFormation;
    }
    
    /**
     * Get choixProduit
     *
     * @return boolean 
     */
      public function setChoixProduit($choixProduit) {
        $this->choixProduit = $choixProduit;

        

        return $this;
    }

    /**
     * Get choixProduit
     *
     * @return boolean 
     */
    public function getChoixProduit() {
        return $this->choixProduit;
    }


    /**
     * Set sites
     *
     * @param \emh\cmsPrincipalBundle\Entity\Sites $sites
     * @return Rubriques
     */
    public function setSites(\emh\cmsPrincipalBundle\Entity\Sites $sites = null) {
        $this->sites = $sites;

        return $this;
    }

    /**
     * Get sites
     *
     * @return \emh\cmsPrincipalBundle\Entity\Sites 
     */
    public function getSites() {
        return $this->sites;
    }

     public function __toString() {
        return $this->nomFr;
    }
   

}
