<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModelMaterial extends Model
{
    protected $table = 'MM_MASTER_MATERIAL';
    protected $primaryKey = 'ID_NUM';
    protected $allowedFields = ['ID_MATERIAL', 'MATERIAL_DESC', 'UNIT'];

}

?>