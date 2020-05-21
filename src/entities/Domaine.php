<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="domaine")
 **/

class Domaine
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $libelle;

    /**
     * One domaine has many demandeurs. This is the inverse side.
     * @OneToMany(targetEntity="Demandeur", mappedBy="domaine")
     */
    private $demandeurs;

    public function __construct() {
        $this->demandeurs = new ArrayCollection();
    }
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    

    /**
     * Get one ville has many demandeurs. This is the inverse side.
     */ 
    public function getDemandeurs()
    {
        return $this->demandeurs;
    }

    /**
     * Set one ville has many demandeurs. This is the inverse side.
     *
     * @return  self
     */ 
    public function setDemandeurs($demandeurs)
    {
        $this->demandeurs = $demandeurs;

        return $this;
    }
}

?>
