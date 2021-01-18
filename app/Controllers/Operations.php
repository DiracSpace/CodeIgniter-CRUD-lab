<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuarios;

class Operations extends Controller
{
    // GET all users
    public function index()
    {
        $userModel = new Usuarios();
        $data['usuarios'] = $userModel -> orderBy('id') -> findAll();
        return view('CrudSite', $data);
    }

    // new user form 
    public function register()
    {
        return view('Create');
    }

    // POST new user
    public function create()
    {
        $userModel = new Usuarios();
        $data = [
            'nombre' => $this -> request -> getVar('nombre'),
            'email' => $this -> request -> getVar('email'),
        ];
        $userModel -> insert($data);
        return redirect() -> to(base_url('/operations'));
    }

    // GET single user for editing
    public function singleUser($id = null)
    {
        $userModel = new Usuarios();
        $data['user_obj'] = $userModel -> where('id', $id) -> first();
        return view('Edit', $data);
    }

    // PUT new user data
    public function update()
    {
        $userModel = new Usuarios();
        $id = $this -> request -> getVar('id');
        $data = [
            'nombre' => $this -> request -> getVar('nombre'),
            'email' => $this -> request -> getVar('email'),
        ];
        $userModel -> update($id, $data);
        return redirect() -> to(base_url('/operations'));
    }

    // DELETE user
    public function delete()
    {
        $userModel = new Usuarios();
        $id = $this -> request -> getVar('id');
        $userModel -> where('id', $id) -> delete($id);
        return redirect() -> to(base_url('/operations'));
    }
}