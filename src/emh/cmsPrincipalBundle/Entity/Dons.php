<?php

namespace emh\cmsPrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dons
 *
 * @ORM\Table(name="dons", indexes={@ORM\Index(name="fk_dons_membres1_idx", columns={"membres_id"})})
 * @ORM\Entity
 */
class Dons
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
     * @ORM\Column(name="prix", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $prix = '10';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="paye", type="blob", length=1, nullable=true)
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
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="membres_id", referencedColumnName="id")
     * })
     */
    private $membres;



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
     * Set prix
     *
     * @param string $prix
     * @return Dons
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
     * @return Dons
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
     * @param string $paye
     * @return Dons
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
     * Set virementPaypal
     *
     * @param string $virementPaypal
     * @return Dons
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
     * @param \emh\cmsPrincipalBundle\Entity\Membres $membres
     * @return Dons
     */
    public function setMembres(\emh\cmsPrincipalBundle\Entity\Membres $membres = null)
    {
        $this->membres = $membres;

        return $this;
    }

    /**
     * Get membres
     *
     * @return \emh\cmsPrincipalBundle\Entity\Membres 
     */
    public function getMembres()
    {
        return $this->membres;
    }
}
