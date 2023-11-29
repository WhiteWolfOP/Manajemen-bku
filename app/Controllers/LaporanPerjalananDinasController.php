<?php

namespace App\Controllers;

use App\Models\LaporanPerjalananDinasModel;
use App\Models\KasModel;
use CodeIgniter\Controller;

class LaporanPerjalananDinasController extends Controller
{
    public function index()
    {
        $laporanModel = new LaporanPerjalananDinasModel();
        $data['laporans'] = $laporanModel->ambilSemuaJoinPerdinBbmPelaksana(); // Mendapatkan semua data laporan

        return view('laporan/index', $data); // Menampilkan view index dengan data laporan
    }

    public function create()
    {
        $validation = \Config\Services::validation();

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'perdin_id' => 'required',
                'sp' => 'required',
                'sppd' => 'required',
                'lp' => 'required',
                'kwitansi' => 'required',
                'laporan_pdf' => 'uploaded[laporan_pdf]|max_size[laporan_pdf,1024]|ext_in[laporan_pdf,pdf]',
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('validation', $validation);
            }

            $file = $this->request->getFile('laporan_pdf');
            $fileName = $file->getName();
            $filePath = ROOTPATH . 'public/uploads/' . $fileName;

            if (file_exists($filePath)) {
                return redirect()->back()->with('error', 'File dengan nama yang sama sudah ada');
            }

            $file->move(ROOTPATH . 'public/uploads', $fileName);

            $laporanModel = new LaporanPerjalananDinasModel();
            $laporanModel->save([
                'perdin_id' => $this->request->getPost('perdin_id'),
                'sp' => $this->request->getPost('sp'),
                'sppd' => $this->request->getPost('sppd'),
                'lp' => $this->request->getPost('lp'),
                'kwitansi' => $this->request->getPost('kwitansi'),
                'laporan_pdf' => $fileName,
                'status' => 'dalam pengecekan'
            ]);

            return redirect()->to('/laporan_perjalanan_dinas');
        }

        return view('laporan/create');
    }

    public function edit($id)
    {
        $laporanModel = new LaporanPerjalananDinasModel();
        $data['laporan'] = $laporanModel->find($id);

        if ($this->request->getMethod() === 'post') {
            $rules = [
                // Atur aturan validasi sesuai kebutuhan untuk edit
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('validation', $validation);
            }

            $laporanModel->update($id, [
                'perdin_id' => $this->request->getPost('perdin_id'),
                'sp' => $this->request->getPost('sp'),
                'sppd' => $this->request->getPost('sppd'),
                'lp' => $this->request->getPost('lp'),
                'kwitansi' => $this->request->getPost('kwitansi'),
                // Tambahkan aturan validasi dan logika update sesuai kebutuhan
            ]);

            return redirect()->to('/laporan_perjalanan_dinas');
        }

        return view('laporan/edit', $data);
    }

    public function konfirmasi($id)
    {
        // load instance object of model
        $laporanPerjalananDinasModel = new LaporanPerjalananDinasModel();
        $kasModel = new KasModel();

        $data['laporan_perjalanan_dinas'] = $laporanPerjalananDinasModel->ambilSemuaJoinPerdinBbmPelaksanaDetail($id);

        // cek if method post
        if ($this->request->getMethod() === 'post') {

            $formData1 = [
                "status" => $this->request->getPost('status')
            ];

            $laporanPerjalananDinasModel->update($id, $formData1);

            if ($this->request->getPost('status') == 2) {

                $formData = [

                    'perdin_id'         => $this->request->getPost('perdin_id'),
                    'keterangan'        => $this->request->getPost('keterangan'),
                    'debet'             => $this->request->getPost('debet'),
                    'bagian_dprd_id'    => $this->request->getPost('bagian_dprd_id'),

                ];

                $kasModel->insert($formData);
            }

            return redirect()->to('/laporan');
        }

        return view('laporan/konfirmasi', $data);
    }

    public function delete($id)
    {
        $laporanModel = new LaporanPerjalananDinasModel();
        $laporanModel->delete($id);

        return redirect()->to('/laporan_perjalanan_dinas');
    }
}
