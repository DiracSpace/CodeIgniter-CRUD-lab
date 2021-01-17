<?php 
namespace App\Models;
use CodeIgniter\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';    
    protected $allowedFields = ['nombre', 'email'];
}

// https://www.positronx.io/codeigniter-crud-with-bootstrap-and-mysql-example/