<?php

namespace App\Controllers;
use App\Models\AutorModel;
use App\Models\VestModel;

class Gost extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function login()
    {
        if(!$this->validate(['username'=>'required', 'password'=>'required'])){
        $errorMsg = $this->validator->listErrors();
        return view ('login', ['error'=>$errorMsg]);
        } 
        $model = new AutorModel();
        $autor = $model->find($this->request->getVar('username'));
        if($autor == null){
            return view('login', ['error'=>'Korisnik ne postoji']);
        }  
        if($autor->lozinka != $this->request->getVar('password')){
            return view('login', ['error'=>'Pogresan password!']);
        }
        $this->session->set('autor', $autor); 
        return redirect()->to('User');     
    }
    public function vesti(){
        $model = new VestModel();
        $vesti = $model->findAll();
        return view("vesti", ["vesti" => $vesti]);
    }
    public function vest($id){
        $model = new VestModel();
        $vest = $model->find($id);
        return view("vest", ["vest" => $vest]);
    }
    
}
?>