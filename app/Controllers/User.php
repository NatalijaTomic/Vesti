<?php

namespace App\Controllers;
use App\Models\VestModel;

class User extends BaseController
{
    public function index()
    {
        $name = $this->session->get('autor')->korime;
        $model = new VestModel();
        $mojeVesti = $model->where("autor", $name)->find();
        return view("user", ['name'=> $name, "vesti" => $mojeVesti]);
    }

    public function logout()
    {
        {   
            $this->session->destroy();  
            return redirect()->to('User');  
        }  
    }
    public function dodavanjeVesti()
    {
        return view("dodavanjevesti");
    }
    public function dodajVest(){
        $model = new VestModel();
        $vest = [
            'naslov' => $this->request->getPost("naslov"),
            'sadrzaj' => $this->request->getPost("sadrzaj"),
            'autor' => $this->session->get("autor")->korime,
            'datum' => date("Y-m-d")
        ];
        $model->insert($vest);
        return redirect()->to("");
    }
       
    
}
