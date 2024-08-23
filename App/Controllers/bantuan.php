<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Bantuan;


class bantuan extends Controller
{
    protected $model;
    public function __construct()
    {

        $this->model = new M_Bantuan;
        helper('sn');
    }

    public function index()
    {



        $data = [
            'judul' => 'Data Bantuan',
            'bantuan' => $this->model->getAllData()
        ];
        //load view//
        tampilan('bantuan/index', $data);
    }

    public function tambah()
    {

        if (isset($_POST['tambah'])) {
            $val = $this->validate([

                'tahun' => [
                    'label' => 'Tahun',
                    'rules' => 'required|numeric|max_length[16]|is_unique[bantuan.tahun]'

                ],

                'nama bantuan' => [
                    'label' => 'Nama Bantuan',
                    'rules' => 'required|numeric|max_length[16]|is_unique[bantuan.nama bantuan]'

                ],

                'jumlah bantuan' => [
                    'label' => 'Jumlah Bantuan',
                    'rules' => 'required|numeric|max_length[16]|is_unique[bantuan.jumlah bantuan]'

                ],
                'satuan' => 'required',
                'jenis' => 'required'
            ]);

            if (!$val) {
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                $data = [
                    'judul' => 'Data bantuan',
                    'bantuan' => $this->model->getAllData()
                ];
                //load view//
                tampilan('bantuan/index', $data);
            } else {

                $data = [
                    'tahun' => $this->request->getPost('tahun'),
                    'nama bantuan' => $this->request->getPost('nama bantuan'),
                    'jumlah bantuan' => $this->request->getPost('jumlah bantuan'),
                    'satuan' => $this->request->getPost('satuan'),
                    'jenis' => $this->request->getPost('jenis')
                ];


                //insert data
                $success = $this->model->tambah($data);
                if ($success) {
                    session()->setFlashdata('message', 'Ditambahkan');
                    return redirect()->to('/bantuan');
                }
            }
        } else {
            return redirect()->to('/bantuan');
        }
    }


    public function ubah()
    {

        if (isset($_POST['ubah'])) {
            $id = $this->request->getPost('id');
            $tahun = $this->request->getPost('tahun');
            $db_tahun = $this->model->getAllData($id)['tahun'];

            if ($tahun === $db_tahun) {
                $val = $this->validate([

                    'tahun' => [
                        'label' => 'tahun',
                        'rules' => 'required|numeric|max_length[16]'

                    ],

                    'nama bantuan' => [
                        'label' => 'nama bantuan',
                        'rules' => 'required|numeric|max_length[16]|is_unique[bantuan.nama bantuan]'

                    ],

                    'jumlah bantuan' => [
                        'label' => 'jumlah bantuan',
                        'rules' => 'required|numeric|max_length[16]|is_unique[bantuan.jumlah bantuan]'

                    ],
                    'satuan' => 'required',
                    'jenis' => 'required'
                ]);
            } else {
                $val = $this->validate([

                    'tahun' => [
                        'label' => 'Tahun',
                        'rules' => 'required|numeric|max_length[16]|is_unique[bantuan.tahun]'

                    ],

                    'nama bantuan' => [
                        'label' => 'Nama Bantuan',
                        'rules' => 'required|numeric|max_length[16]|is_unique[bantuan.nama bantuan]'

                    ],

                    'jumlah bantuan' => [
                        'label' => 'Jumlah Bantuan',
                        'rules' => 'required|numeric|max_length[16]|is_unique[bantuan.jumlah bantuan]'

                    ],
                    'satuan' => 'required',
                    'jenis' => 'required'
                ]);
            }



            if (!$val) {
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                $data = [
                    'judul' => 'bantuan',
                    'bantuan' => $this->model->getAllData()
                ];
                //load view//
                tampilan('bantuan/index', $data);
            } else {

                $id = $this->request->getPost('id');

                $data = [
                    'tahun' => $this->request->getPost('tahun'),
                    'nama bantuan' => $this->request->getPost('nama bantuan'),
                    'jumlah bantuan' => $this->request->getPost('jumlah bantuan'),
                    'satuan' => $this->request->getPost('satuan'),
                    'jenis' => $this->request->getPost('jenis')

                ];


                //Update data
                $success = $this->model->ubah($data, $id);
                if ($success) {
                    session()->setFlashdata('message', 'Di Ubah');
                    return redirect()->to('/bantuan');
                }
            }
        } else {
            return redirect()->to('/bantuan');
        }
    }


    public function hapus($id)
    {
        $this->model->hapus($id);
        session()->setFlashdata('message', ' Dihapus');
        return redirect()->to('/bantuan');
    }

    public function excel()
    {
        $data = [
            'bantuan' => $this->model->getAllData()
        ];
        echo view('bantuan/excel', $data);
    }
}
