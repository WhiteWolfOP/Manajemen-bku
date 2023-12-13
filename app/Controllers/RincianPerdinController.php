<?php

namespace App\Controllers;

use App\Models\RincianPerdinModel;
use App\Models\PerjalananDinasModel; // Model Perjalanan Dinas jika digunakan

class RincianPerdinController extends BaseController
{
    public function index()
    {
        $rincianPerdinModel = new RincianPerdinModel();
        $data['rincianPerdin'] = $rincianPerdinModel->findAll();

        return view('rincian_perdin/index', $data);
    }

    public function create()
    {
        $data = [];
        
        // Jika diperlukan, gunakan model perjalanan dinas
        $perjalananDinasModel = new PerjalananDinasModel();
        $data['perjalananDinas'] = $perjalananDinasModel->findAll();

        if ($this->request->getMethod() === 'post') {
            $rincianPerdinModel = new RincianPerdinModel();

            // Proses data dari form
            $data = [
                'perdin_id' => $this->request->getPost('perdin_id'),
                'judul_rincian' => $this->request->getPost('judul_rincian'),
                'rincian_biaya' => $this->request->getPost('rincian_biaya'),
                'jumlah_total' => $this->request->getPost('jumlah_total'),
                'keterangan' => $this->request->getPost('keterangan')
            ];

            $rincianPerdinModel->save($data);

            return redirect()->to('/rincian_perdin');
        }

        return view('rincian_perdin/create', $data);
    }

    // Metode lain sesuai kebutuhan
}
