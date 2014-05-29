<?php

namespace emh\cmsPrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Gedmo\Mapping\Annotation as Gedmo;

use Symfony\Component\Validator\Constraints as Assert;


/**
 * Articles
 *
 * @ORM\Table(name="articles", indexes={@ORM\Index(name="fk_articles_rubriques1_idx", columns={"rubriques_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
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
     * @var string
     *
     * @ORM\Column(name="texte_fr", type="text", nullable=false)
     */
    private $texteFr;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_en", type="text", nullable=true)
     */
    private $texteEn;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=45, nullable=true)
     */
    private $image;
    
      /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;


    /**
     * @var \Rubriques
     *
     * @ORM\ManyToOne(targetEntity="emh\cmsPrincipalBundle\Entity\Rubriques")
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
     
    
    public function getWebImage()
    {
        return null === $this->image ? null : $this->getUploadDir().'/'.$this->image;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'images/';
    }
 // propriété utilisé temporairement pour la suppression
    private $filenameForRemove;

    /**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove()
    {
        $this->filenameForRemove = $this->getAbsoluteImage();
    }

    
    public function getAbsoluteImage()
    {
       return null === $this->image ? null : $this->getUploadRootDir().'/'.$this->image;
    }
    
    
     /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            // faites ce que vous voulez pour générer un nom unique
            $this->image = sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
       
        if (null === $this->file) {
            return;
        }

        // s'il y a une erreur lors du déplacement du fichier, une exception
        // va automatiquement être lancée par la méthode move(). Cela va empêcher
        // proprement l'entité d'être persistée dans la base de données si
        // erreur il y a
        $this->file->move($this->getUploadRootDir(), $this->image);
       
        unset($this->file);
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsoluteImage()) {
            unlink($file);
        }
    }
  
}
