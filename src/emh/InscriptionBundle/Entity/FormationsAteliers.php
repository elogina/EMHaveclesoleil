<?php

namespace emh\InscriptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormationsAteliers
 *
 * @ORM\Table(name="formations_ateliers", indexes={@ORM\Index(name="fk_formations_ateliers_sites1_idx", columns={"sites_id"})})
 * @ORM\Entity
 */
class FormationsAteliers
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
     * @var string
     *
     * @ORM\Column(name="description_fr", type="text", nullable=false)
     */
    private $descriptionFr;

    /**
     * @var string
     *
     * @ORM\Column(name="description_en", type="string", length=45, nullable=true)
     */
    private $descriptionEn;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $prix = '10';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="date", nullable=false)
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="date", nullable=false)
     */
    private $fin;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbMax", type="integer", nullable=false)
     */
    private $nbmax = '10';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInscription", type="date", nullable=false)
     */
    private $dateinscription;

    /**
     * @var string
     *
     * @ORM\Column(name="paye", type="blob", length=1, nullable=true)
     */
    private $paye;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="emh\MembresBundle\Entity\Membres", mappedBy="formationsAteliers")
     */
    private $membres;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->membres = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * @return FormationsAteliers
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
     * @return FormationsAteliers
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
     * Set descriptionFr
     *
     * @param string $descriptionFr
     * @return FormationsAteliers
     */
    public function setDescriptionFr($descriptionFr)
    {
        $this->descriptionFr = $descriptionFr;

        return $this;
    }

    /**
     * Get descriptionFr
     *
     * @return string 
     */
    public function getDescriptionFr()
    {
        return $this->descriptionFr;
    }

    /**
     * Set descriptionEn
     *
     * @param string $descriptionEn
     * @return FormationsAteliers
     */
    public function setDescriptionEn($descriptionEn)
    {
        $this->descriptionEn = $descriptionEn;

        return $this;
    }

    /**
     * Get descriptionEn
     *
     * @return string 
     */
    public function getDescriptionEn()
    {
        return $this->descriptionEn;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return FormationsAteliers
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return FormationsAteliers
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set debut
     *
     * @param \DateTime $debut
     * @return FormationsAteliers
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime 
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     * @return FormationsAteliers
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime 
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set nbmax
     *
     * @param boolean $nbmax
     * @return FormationsAteliers
     */
    public function setNbmax($nbmax)
    {
        $this->nbmax = $nbmax;

        return $this;
    }

    /**
     * Get nbmax
     *
     * @return boolean 
     */
    public function getNbmax()
    {
        return $this->nbmax;
    }

    /**
     * Set dateinscription
     *
     * @param \DateTime $dateinscription
     * @return FormationsAteliers
     */
    public function setDateinscription($dateinscription)
    {
        $this->dateinscription = $dateinscription;

        return $this;
    }

    /**
     * Get dateinscription
     *
     * @return \DateTime 
     */
    public function getDateinscription()
    {
        return $this->dateinscription;
    }

    /**
     * Set paye
     *
     * @param string $paye
     * @return FormationsAteliers
     */
    public function setPaye($paye)
    {
        $this->paye = $paye;

        return $this;
    }

    /**
     * Get paye
     *
     * @return string 
     */
    public function getPaye()
    {
        return $this->paye;
    }

    /**
     * Set sites
     *
     * @param \emh\cmsPrincipalBundle\Entity\Sites $sites
     * @return FormationsAteliers
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

    /**
     * Add membres
     *
     * @param \emh\MembresBundle\Entity\Membres $membres
     * @return FormationsAteliers
     */
    public function addMembre(\emh\MembresBundle\Entity\Membres $membres)
    {
        $this->membres[] = $membres;

        return $this;
    }

    /**
     * Remove membres
     *
     * @param \emh\MembresBundle\Entity\Membres $membres
     */
    public function removeMembre(\emh\MembresBundle\Entity\Membres $membres)
    {
        $this->membres->removeElement($membres);
    }

    /**
     * Get membres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembres()
    {
        return $this->membres;
    }
}
