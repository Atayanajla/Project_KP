<?php
namespace App\Models;

use CodeIgniter\Model;

class ModelProduk extends Model
{
    protected $table = 'MM_REQUEST_RESERVASI';
    protected $primaryKey = 'BPBNO';
    protected $allowedFields =['RSDATE', 'MOVTP', 'SLCAWAL', 'WEMPF', 'RSNUM', 'MATNO', 'QUTTY', 'SLCTUJU', 'RSREL','USNAM','BDTER', 'WBSAWAL', 'WBSTUJU', 'RSNUM'];

    public function insertProducts($data)
    {
        return $this->insert($data);
    }
}


?>