<?php

namespace App\Models;

use CodeIgniter\Model;

class RincianPerdinModel extends Model
{
    protected $table = 'rincian_perdin';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'perdin_id',
        'judul_rincian',
        'rincian_biaya',
        'jumlah_total',
        'keterangan'
    ];
    
    protected $useTimestamps = true; // Menggunakan timestamps
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Metode lain sesuai kebutuhan
    public function getAllRincian()
    {
        return $this->findAll();
    }
}
