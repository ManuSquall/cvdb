<?php
use libs\system\Controller;
use src\model\DemandeurRepository;
use src\model\VilleRepository;
use src\model\DomaineRepository;

class DemandeurController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function liste()
    {
        $demandeurdb = new DemandeurRepository();
        $data['listeDemandeur'] = $demandeurdb->getAll();
        //Pour la liste deroulante du formulaire d'ajout
        // $villedb = new VilleRepository();
        // $domainedb = new DomaineRepository();
        // $data['listeVille'] = $villedb->getAll();
        // $data['listeDomaine'] = $domainedb->getAll();
        // return $this->view->load("demandeur/list", $data);
        return $this->view->load("demandeur/list");
    }

    public function add(){
        $villedb = new VilleRepository();
        $domainedb = new DomaineRepository();
        $data['listeVille'] = $villedb->getAll();
        $data['listeDomaine'] = $domainedb->getAll();
        return $this->view->load("demandeur/add", $data);
    }

    public function insert()
    {
        $demandeurdb = new DemandeurRepository();
        extract($_POST);
        $demandeur = new Demandeur();
        $demandeur->setNom($nom);
        $demandeur->setPrenom($prenom);
        $demandeur->setTel($tel);
        $demandeur->setAdresse($adresse);
        $demandeur->setDatenaiss($datenaiss);
        $demandeur->setPhoto($photo);
        $demandeur->setCv($cv);
        $demandeur->setEmail($email);

        $demandeur->setVille($demandeurdb->getVille($idville));
        $demandeur->setDomaine($demandeurdb->getDomaine($iddomaine));

        $demandeurdb->insert($demandeur);

        return $this->liste();
    }
    public function edit($id)
    {
        $demandeurdb = new DemandeurRepository();
        $data["demandeur"] = $demandeurdb->get($id);
        $data["listeDemandeur"] = $demandeurdb->getAll();
        $villedb = new VilleRepository();
        $domainedb = new DomaineRepository();
        $data['listeVille'] = $villedb->getAll();
        $data['listeDomaine'] = $domainedb->getAll();
        return $this->view->load("demandeur/edit", $data);
    }
    public function update()
    {
        $demandeurdb = new DemandeurRepository();
        extract($_POST);
        $demandeur = new Demandeur();
        $demandeur->setId($id);
        $demandeur->setNom($nom);
        $demandeur->setPrenom($prenom);
        $demandeur->setTel($tel);
        $demandeur->setAdresse($adresse);
        $demandeur->setDatenaiss($datenaiss);
        $demandeur->setPhoto($photo);
        $demandeur->setCv($cv);
        $demandeur->setEmail($email);

        $demandeur->setVille($demandeurdb->getVille($idville));
        $demandeur->setDomaine($demandeurdb->getDomaine($iddomaine));


        $demandeurdb->update($demandeur);

        return $this->liste();
    }

    public function delete($id)
    {
        $demandeurdb = new DemandeurRepository();
        $demandeurdb->delete($id);

        return $this->liste();
    }

}
?>
