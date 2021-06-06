<?php

namespace App\Controllers;
use App\Models\Modelik;

class stranka extends BaseController
{
	public function index()
	{
		return view('contact_form');
	}
         
    public function Validace() {
        helper(['form','url']);
        
        $input = $this->validate([
            'jmeno' =>'required|min_length[3]',
            'prijmeni' =>'required|min_length[3]',
            'email' =>'required|min_length[5]',
            'telefon' =>'required|min_length[3]',
            
            
        ]);
        $modelik = new Modelik();
        if (!$input) {
            echo view('contact_form', [
                'validation' => $this->validator
            ]);
        } else {
            $modelik->save([
     'jmeno' => $this->request->getVar('jmeno'),
      'telefon'  => $this->request->getVar('telefon'),
         'prijmeni' => $this->request->getVar('prijmeni'),
         'email'  => $this->request->getVar('email'), 
                
                   
      ]);          
     echo '<script>alert("Registrace byla zaevidována")</script>';
       return view('contact_form');

        }
    }

}