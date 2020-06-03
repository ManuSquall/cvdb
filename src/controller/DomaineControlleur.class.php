<?php
use libs\system\Controller;

use src\model\DomaineRepository;

class DomaineController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function liste()
    {
        $domainedb = new DomaineRepository();
        $data["listedomaine"] = $domainedb->getAll();
        return $this->view->load("domaine/list", $data);
    }

    public function insert()
    {
        extract($_POST);
        $domaine = new Domaine();
        $domaine->setId($id);
        $domaine->setLibelle($libelle);

        $domainedb = new DomaineRepository();
        $domainedb->insert($domaine);

        return $this->liste();
    }

    public function edit($id)
    {
        $domainedb = new DomaineRepository();
        $data["domaine"] = $domainedb->get($id);
        $data["listedomaine"] = $domainedb->getAll();
        return $this->view->load("domaine/edit", $data);
    }
    public function update()
    {
        extract($_POST);
        $domaine = new Domaine();
        $domaine->setId($id);
        $domaine->setLibelle($libelle);
        

        $domainedb = new DomaineRepository();
        $domainedb->update($domaine);

        return $this->liste();
    }

    public function delete($id)
    {
        $domainedb = new DomaineRepository();
        $domainedb->delete($id);

        return $this->liste();
    }
}
?>
