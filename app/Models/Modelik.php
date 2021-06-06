<?php 
namespace App\Models;
use CodeIgniter\Model;
class Modelik extends Model
{
protected $table = 'test';
protected $allowedFields = ['jmeno', 'prijmeni', 'telefon', 'email'];
 protected $primaryKey = 'id';
    }