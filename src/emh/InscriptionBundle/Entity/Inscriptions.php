<?php

namespace emh\InscriptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Inscription
 *
 * @ORM\Table(name="inscription")
 * @ORM\Entity(repositoryClass="emh\InscriptionBundle\Entity\FormationsAteliersRepository")
 */
class Inscriptions 
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
    
     
     * @ORM\ManyToOne(targetEntity="emh\InscriptionBundle\Entity\FormationsAteliers")
     */
    private $formationsAteliers;

    /**
     
     
     * @ORM\ManyToOne(targetEntity="emh\MembresBundle\Entity\Membres")
     */
    private $membres;

    /**
     * @var \DateTime

     * @ORM\Column(name="dateInscription", type="date", nullable=true)
     */
    private $dateInscription;

    /**
     * @var boolean
     *
     * @ORM\Column(name="paye", type="boolean", length=1, nullable=true)
     */
    private $paye;

    


    /**
     * Set dateinscription
     *
     * @param \DateTime $dateInscription
     * @return Inscriptions
     */
    public function setDateInscription($dateinscription)
    {
        $this->dateInscription = $dateinscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set paye
     *
     * @param boolean $paye
     * @return Inscriptions
     */
    public function setPaye($paye)
    {
        $this->paye = $paye;

        return $this;
    }

    /**
     * Get paye
     *
     * @return boolean 
     */
    public function getPaye()
    {
        return $this->paye;
    }

    /**
     * Set formationsAteliers
     *
     * @param \emh\InscriptionBundle\Entity\FormationsAteliers $formationsAteliers
     * @return Inscriptions
     */
    public function setFormationsAteliers(\emh\InscriptionBundle\Entity\FormationsAteliers $formationsAteliers)
    {
        $this->formationsAteliers = $formationsAteliers;

        return $this;
    }

    /**
     * Get formationsAteliers
     *
     * @return \emh\InscriptionBundle\Entity\FormationsAteliers 
     */
    public function getFormationsAteliers()
    {
        return $this->formationsAteliers;
    }
 

    /**
     * Set membres
     *
     * @param \emh\MembresBundle\Entity\Membres $membres
     * @return Inscriptions
     */
    public function setMembres(\emh\MembresBundle\Entity\Membres $membres)
    {
        $this->membres = $membres;

        return $this;
    }

    /**
     * Get membres
     *
     * @return \emh\MembresBundle\Entity\Membres 
     */
    public function getMembres()
    {
        return $this->membres;
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
    
   
}
