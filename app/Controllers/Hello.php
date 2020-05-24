<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Hello extends Controller
{

    public function index()
	{
        $db = \Config\Database::connect();

        $db->query('SELECT * FROM tb_boasvindas', []);

        $varteste = [
            "teste" => "olá"
        ];

        // $db->close();

        return view('Hello/hello', $varteste);
        
    }
    
    public function sobre()
	{
		return view('Hello/sobre');
	}

}