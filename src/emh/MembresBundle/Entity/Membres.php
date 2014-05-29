<?php

namespace emh\MembresBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * Membres
 *
 * @ORM\Table(name="membres")
 * @ORM\Entity(repositoryClass="emh\MembresBundle\Entity\MembresRepository")
 */
class Membres extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    
    public function __construct()
    {
        parent::__construct();
        $this->formations = new \Doctrine\Common\Collections\ArrayCollection();
        
    }
     /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    private $nom;
    
     /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true)
     */
    private $prenom;
    
     /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephonne", type="string", length=45, nullable=true)
     */
    private $telephonne;
    
    /**
     * Constructor
     */
   
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
     * Set nom
     *
     * @param string $nom
     * @return Membres
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Membres
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Membres
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set telephonne
     *
     * @param string $telephonne
     * @return Membres
     */
    public function setTelephonne($telephonne)
    {
        $this->telephonne = $telephonne;

        return $this;
    }

    /**
     * Get telephonne
     *
     * @return string 
     */
    public function getTelephonne()
    {
        return $this->telephonne;
    }
 
}
