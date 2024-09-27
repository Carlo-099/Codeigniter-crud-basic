<?php 
namespace App\Models;
use CodeIgniter\Model;


class CrudModel extends Model
{
    protected $table = 'names';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'email'];
}