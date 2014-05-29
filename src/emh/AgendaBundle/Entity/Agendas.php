<?php

namespace emh\AgendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


use Gedmo\Mapping\Annotation as Gedmo;



/**
 * Agendas
 *
 * @ORM\Table(name="agendas", indexes={@ORM\Index(name="fk_agendas_site1_idx", columns={"sites_id"})})
 * @ORM\Entity
 */
class Agendas
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
     * @Gedmo\Slug(fields={"titreFr"})
     * @ORM\Column(type="string")
     */
    protected $slugFr;
    
         /**
     * @Gedmo\Slug(fields={"titreEn"})
     * @ORM\Column(type="string")
     */
    protected $slugEn;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_fr", type="string", length=45, nullable=false)
     */
    private $titreFr;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_en", type="string", length=45, nullable=true)
     */
    private $titreEn;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_fr", type="text", nullable=false)
     */
    private $texteFr;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_en", type="text", nullable=false)
     */
    private $texteEn;

   
    
      

    /**
     * @var \Sites
     *
     * @ORM\ManyToOne(targetEntity="emh\cmsPrincipalBundle\Entity\Sites")
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titreFr
     *
     * @param string $titreFr
     * @return Agendas
     */
    public function setTitreFr($titreFr)
    {
        $this->titreFr = $titreFr;

        return $this;
    }

    /**
     * Get titreFr
     *
     * @return string 
     */
    public function getTitreFr()
    {
        return $this->titreFr;
    }

    /**
     * Set titreEn
     *
     * @param string $titreEn
     * @return Agendas
     */
    public function setTitreEn($titreEn)
    {
        $this->titreEn = $titreEn;

        return $this;
    }

    /**
     * Get titreEn
     *
     * @return string 
     */
    public function getTitreEn()
    {
        return $this->titreEn;
    }

    /**
     * Set texteFr
     *
     * @param string $texteFr
     * @return Agendas
     */
    public function setTexteFr($texteFr)
    {
        $this->texteFr = $texteFr;

        return $this;
    }

    /**
     * Get texteFr
     *
     * @return string 
     */
    public function getTexteFr()
    {
        return $this->texteFr;
    }

    /**
     * Set texteEn
     *
     * @param string $texteEn
     * @return Agendas
     */
    public function setTexteEn($texteEn)
    {
        $this->texteEn = $texteEn;

        return $this;
    }

    /**
     * Get texteEn
     *
     * @return string 
     */
    public function getTexteEn()
    {
        return $this->texteEn;
    }

    

    /**
     * Set sites
     *
     * @param \emh\cmsPrincipalBundle\Entity\Sites $sites
     * @return Agendas
     */
    public function setSites(\emh\cmsPrincipalBundle\Entity\Sites $sites = null)
    {
        $this->sites = $sites;

        return $this;
    }

    /**
     * Get sites
     *
     * @return \emh\cmsPrincipalBundle\Entity\Sites 
     */
    public function getSites()
    {
        return $this->sites;
    }
     
  
}
