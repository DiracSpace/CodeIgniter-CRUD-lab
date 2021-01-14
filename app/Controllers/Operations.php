<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Operations extends Controller
{
    public function index()
    {
        echo 'Hola Mundo desde función';
    }

    public function operacionescrud()
    {
        echo view('operations');
    }
}