<?php 
namespace App\Models;

use CodeIgniter\Model;

class MASTERLOKASIModel extends Model
{
    protected $table = 'MM_MASTER_LOKASI';

    protected $primaryKey = 'ID_NUM';

    protected $allowedFields = ['LOKASI', 'ADR1', 'ADR2', 'ADR3', 'CPN1', 'TPN1', 'CPN2', 'TPN2'];

}

?>