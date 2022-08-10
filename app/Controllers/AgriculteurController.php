<?php

namespace App\Controllers;

use App\Models\AgriculteurModel;

class AgriculteurController extends BaseController
{
    public function index()
    {
        $agriculteur= new AgriculteurModel();
        $data['agriculteur']= $agriculteur->findAll();
        return view('agriculteur/index.php', $data);
    }

    public function store()
    {
        $agriculteur= new AgriculteurModel();
        $data =array (
             'cvl' => $this->request->getPost('cvl'),
             'prenom' => $this->request->getPost('prenom'),
             'nom' => $this->request->getPost('nom'),
             'tranche_age' => $this->request->getPost('tranche_age'),

    );
    $agriculteur->save($data);
    return redirect()->to('/')->with('status','saved');
    
    
    }
}
