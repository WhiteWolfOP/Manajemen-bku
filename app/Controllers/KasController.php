<?php

namespace App\Controllers;

use App\Models\BbmModel;
use App\Models\KasModel;
use CodeIgniter\Controller;

class KasController extends Controller
{
    public function index()
    {
        $kasModel = new KasModel();
        $kasData = $kasModel->getAllKas();

        return view('kas/index', ['kasData' => $kasData]);
    }

    public function create()
    {
        $bbmModel = new BbmModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'provinsi' => 'required',
            'kota' => 'required',
            'harga_bbm' => 'required|numeric'
        ])) {
            $bbmModel->insertBbm($this->request->getPost());
            return redirect()->to('/bbm');
        }

        return view('bbm/create');
    }

    public function edit($id)
    {
        $bbmModel = new BbmModel();
        $bbmData = $bbmModel->getBbmById($id);

        if ($this->request->getMethod() === 'post' && $this->validate([
            'provinsi' => 'required',
            'kota' => 'required',
            'harga_bbm' => 'required|numeric'
        ])) {
            $bbmModel->updateBbm($id, $this->request->getPost());
            return redirect()->to('/bbm');
        }

        return view('bbm/edit', ['bbmData' => $bbmData]);
    }

    public function delete($id)
    {
        $bbmModel = new BbmModel();
        $bbmModel->deleteBbm($id);
        return redirect()->to('/bbm');
    }
}
