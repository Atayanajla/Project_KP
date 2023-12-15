<?php 
namespace App\Models;

use CodeIgniter\Model;

class MonrevModel extends Model
{
    protected $table = 'MM_REQUEST_RESERVASI';
    protected $primaryKey = 'RSNUM';
    protected $allowedFields = ['RSDATE', 'MOVTP', 'SLCAWAL', 'WEMPF', 'RSPOS', 'MATNO', 'QUTTY', 'SLCTUJU', 'RSREL','USNAM','BDTER',];

}

?>