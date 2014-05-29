<?php

namespace emh\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Achats
 *
 * @ORM\Table(name="achats")
 * @ORM\Entity
 */
class Achats
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="paye", type="boolean", length=1, nullable=true)
     */
    private $paye;

    /**
     * @var string
     *
     * @ORM\Column(name="virement_paypal", type="blob", length=1, nullable=true)
     */
    private $virementPaypal;

    /**
     * @var \Membres
     *
     * @ORM\ManyToOne(targetEntity="emh\MembresBundle\Entity\Membres")
     */
    private $membres;

    /**
     * @var \Produits
     *
     * 
     * @ORM\OneToOne(targetEntity="emh\EcommerceBundle\Entity\Produits")
     
     */
    private $produits;

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
     * Set date
     *
     * @param \DateTime $date
     * @return Achats
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
     * Set paye
     *
     * @param boolean $paye
     * @return Achats
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
     * Set virementPaypal
     *
     * @param string $virementPaypal
     * @return Achats
     */
    public function setVirementPaypal($virementPaypal)
    {
        $this->virementPaypal = $virementPaypal;

        return $this;
    }

    /**
     * Get virementPaypal
     *
     * @return string 
     */
    public function getVirementPaypal()
    {
        return $this->virementPaypal;
    }

    /**
     * Set membres
     *
     * @param \emh\MembresBundle\Entity\Membres $membres
     * @return Achats
     */
    public function setMembres(\emh\MembresBundle\Entity\Membres $membres = null)
    {
        $this->membres = $membres;

        return $this;
    }

    /**
     * Get membres
     *
     * @return \emh\EcommerceBundle\Entity\Membres 
     */
    public function getMembres()
    {
        return $this->membres;
    }

    /**
     * Set produits
     *
     * @param \emh\EcommerceBundle\Entity\Produits $produits
     * @return Achats
     */
    public function setProduits(\emh\EcommerceBundle\Entity\Produits $produits)
    {
        $this->produits = $produits;

        return $this;
    }

    /**
     * Get produits
     *
     * @return \emh\EcommerceBundle\Entity\Produits 
     */
    public function getProduits()
    {
        return $this->produits;
    }
    
  
}
