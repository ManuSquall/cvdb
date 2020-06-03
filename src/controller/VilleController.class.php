<?php
use libs\system\Controller;

use src\model\VilleRepository;

class VilleController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function liste()
    {
        $villedb = new VilleRepository();
        $data["listeville"] = $villedb->getAll();
        return $this->view->load("ville/list", $data);
    }

    public function insert()
    {
        extract($_POST);
        $ville = new Ville();
        $ville->setId($id);
        $ville->setLibelle($libelle);

        $villedb = new VilleRepository();
        $villedb->insert($ville);

        return $this->liste();
    }

    public function edit($id)
    {
        $villedb = new VilleRepository();
        $data["ville"] = $villedb->get($id);
        $data["listeville"] = $villedb->getAll();
        return $this->view->load("ville/edit", $data);
    }
    public function update()
    {
        extract($_POST);
        $ville = new Ville();
        $ville->setId($id);
        $ville->setLibelle($libelle);
        

        $villedb = new VilleRepository();
        $villedb->update($ville);

        return $this->liste();
    }

    public function delete($id)
    {
        $villedb = new VilleRepository();
        $villedb->delete($id);

        return $this->liste();
    }
}
?>
