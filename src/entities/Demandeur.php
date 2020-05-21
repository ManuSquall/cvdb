<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="demandeur")
 **/
class Demandeur
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $prenom;
    /** @Column(type="string") **/
    private $tel;
    /** @Column(type="string") **/
    private $adresse;
    /** @Column(type="string", length=2) **/
    private $sexe;
    /** @Column(type="string") **/
    private $datenaiss;
    /** @Column(type="string") **/
    private $email;
    /** @Column(type="string") **/
    private $photo;
    /** @Column(type="string") **/
    private $cv;
    
    /**
     * Many demandeurs have one domaine. This is the owning side.
     * @ManyToOne(targetEntity="Domaine", inversedBy="demandeurs")
     * @JoinColumn(name="domaine_id", referencedColumnName="id")
     */
    private $domaine;
    
    /**
     * Many demandeurs have one ville. This is the owning side.
     * @ManyToOne(targetEntity="Ville", inversedBy="demandeurs")
     * @JoinColumn(name="ville_id", referencedColumnName="id")
     */
    private $ville;

    
    
    
    
    
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getTel()
    {
        return $this->tel;
    }
    public function setTel($tel)
    {
        $this->tel = $tel;
    }
    
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    
    public function getSexe()
    {
        return $this->sexe;
    }
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }
    
    public function getDatenaiss()
    {
        return $this->datenaiss;
    }
    public function setDatenaiss($datenaiss)
    {
        $this->datenaiss = $datenaiss;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }  
    
    /**
     * Get the value of cv
     */ 
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set the value of cv
     *
     * @return  self
     */ 
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get the value of photo
     */ 
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     *
     * @return  self
     */ 
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get many demandeurs have one domaine. This is the owning side.
     */ 
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set many demandeurs have one domaine. This is the owning side.
     *
     * @return  self
     */ 
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get many demandeurs have one ville. This is the owning side.
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set many demandeurs have one ville. This is the owning side.
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    
}

?>