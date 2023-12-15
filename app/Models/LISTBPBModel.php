<?php 
namespace App\Models;

use CodeIgniter\Model;

class LISTBPBModel extends Model
{
    protected $table = 'MM_LIST_BPB';
    protected $primaryKey = 'BPBNO';
    protected $allowedFields = ['MBLNR', 'BUDAT', 'KUNNR', 'BPBNO', 'CUSTOMER', 'LOKASI', 'ADR1', 'CPN1', 'TPN1', 
                                'KET', 'BWNM', 'BWHP', 'ADR2', 'ADR3', 'CPN2', 'TPN2', 'BUNDLE', 'TGL_KIRIM',
                                'ZPONO', 'PODAT', 'VENDOR', 'POLNO', 'TRGDAT', 'NOTA', 'KOLI1', 'BERAT', 'KEMBALI',
                                'BANTEX', 'NOTDAT', 'CATATAN', 'CATATAN2', 'VIA', 'KDKRJ'];

}

?>