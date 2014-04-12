<?php

namespace emh\cmsPrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles", indexes={@ORM\Index(name="fk_articles_rubriques1_idx", columns={"rubriques_id"})})
 * @ORM\Entity
 */
class Articles
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
     * @ORM\Column(name="texte_fr", type="text", nullable=false)
     */
    private $texteFr;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_en", type="string", length=45, nullable=true)
     */
    private $texteEn;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=45, nullable=true)
     */
    private $image;

    /**
     * @var \Rubriques
     *
     * @ORM\ManyToOne(targetEntity="Rubriques")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rubriques_id", referencedColumnName="id")
     * })
     */
    private $rubriques;



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
     * @return Articles
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
     * @return Articles
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
     * Set texteFr
     *
     * @param string $texteFr
     * @return Articles
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
     * @return Articles
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
     * Set image
     *
     * @param string $image
     * @return Articles
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set rubriques
     *
     * @param \emh\cmsPrincipalBundle\Entity\Rubriques $rubriques
     * @return Articles
     */
    public function setRubriques(\emh\cmsPrincipalBundle\Entity\Rubriques $rubriques = null)
    {
        $this->rubriques = $rubriques;

        return $this;
    }

    /**
     * Get rubriques
     *
     * @return \emh\cmsPrincipalBundle\Entity\Rubriques 
     */
    public function getRubriques()
    {
        return $this->rubriques;
    }
}
