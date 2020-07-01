<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
samane@samanemvc.sn
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
namespace src\model;

use libs\system\Model;

class DemandeurRepository extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
	 * Methods with DQL (Doctrine Query Language) 
	 */
    public function getAll()
    {
        return $this->db->getRepository("Demandeur")->findAll();
    }
    public function get($id)
    {
        return $this->db->getRepository("Demandeur")->find(array("id"=>$id));
    }
    /**
     * A noter que cette fonction est une obligation pour la gestion de la
     * cle etrangere
     */
    public function getVille($id)
    {
        return $this->db->getRepository("Ville")->find(array("id"=>$id));
    }
    
    #############################################
    public function getDomaine($id)
    {
        return $this->db->getRepository("Domaine")->find(array("id"=>$id));
    }
    public function insert($demandeur)
    {
        $this->db->persist($demandeur);
        $this->db->flush();
    }
    public function update($demandeur)
    {
        //La vill de la base de donnees
        $v = $this->get($demandeur->getId());
        /*Modification des donnees de ce ville avec les infos
        du ville passe en parametre cad $ville*/
        $v->setNom($demandeur->getNom());
        $v->setPrenom($demandeur->getPrenom());
        $v->setTel($demandeur->getTel());
        $v->setAdresse($demandeur->getAdresse());
        $v->setDatenaiss($demandeur->getDatenaiss());
        $v->setPhoto($demandeur->getPhoto());
        $v->setCv($demandeur->getCv());
        $v->setEmail($demandeur->getEmail());
        
        $v->setVille($demandeur->getVille());
        $v->setDomaine($demandeur->getDomaine());

        $this->db->flush();
    }

    public function delete($id)
    {
        $p = $this->get($id);

        $this->db->remove($p);
        $this->db->flush();
    }
}
