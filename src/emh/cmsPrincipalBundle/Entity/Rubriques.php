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
     * @var \Sites
     *
     * @ORM\ManyToOne(targetEntity="Sites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sites_id", referencedColumnName="id")
     * })
     */
    private $sites;
    
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nomFr
     *
     * @param string $nomFr
     * @return Rubriques
     */

    /**
     * Set slug
     *
     * @param string $slug
     * @return Rubriques
     */
    public function setSlug($slug) {
       $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug() {
        return $this->slug;
    }
    
    public function setNomFr($nomFr) {
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

   
   

}
