<?php
use libs\system\Controller;

use src\model\VilleRepository;

class VilleController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function list()
    {
        $villedb = new VilleRepository();
        $data["listeville"] = $villedb->getAll();
        return $this->view->load("ville/list", $data);
    }

    public function add(){
        return $this->view->load("ville/add");
    }

    public function insert()
    {
        extract($_POST);
        $ville = new Ville();
        $ville->setId($id);
        $ville->setLibelle($libelle);

        $villedb = new VilleRepository();
        $villedb->insert($ville);

        return $this->list();
    }

    public function edit($id)
    {
        $villedb = new VilleRepository();
        $data["ville"] = $villedb->get($id);
        // $data["listeville"] = $villedb->getAll();
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

        
        return $this->list();
    }

    public function delete($id)
    {
        $villedb = new VilleRepository();
        $villedb->delete($id);

        return $this->list();
    }
}
?>
