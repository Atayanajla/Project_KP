<?php 
namespace App\Models;

use CodeIgniter\Model;

class DivisiModel extends Model
{
    protected $table = 'KDTKERJ';
    protected $primaryKey = 'KDKRJ';
    protected $allowedFields = ['KDKRJ', 'DIVISI'];

}

?>