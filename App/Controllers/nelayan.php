<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Nelayan;


class nelayan extends Controller
{
    protected $model;
    public function __construct()
    {
        $this->model = new M_Nelayan;
        helper('sn');
    }

    public function index()
    {




        $data = [
            'judul' => 'Data Nelayan',
            'nelayan' => $this->model->getAllData()
        ];
        //load view//
        tampilan('nelayan/index', $data);
    }

    public function tambah()
    {

        if (isset($_POST['tambah'])) {
            $val = $this->validate([

                'no kk' => [
                    'label' => 'Nomor Kartu Keluarga',
                    'rules' => 'required|numeric|max_length[16]|is_unique[nelayan.no kk]'

                ],

                'nik' => [
                    'label' => 'Nomor Induk Keluarga',
                    'rules' => 'required|numeric|max_length[16]|is_unique[nelayan.nik]'

                ],

                'no kn' => [
                    'label' => 'Nomor Kartu Nelayan',
                    'rules' => 'required|numeric|max_length[16]|is_unique[nelayan.no kn]'

                ],
                'nama' => 'required',
                'tgl' => 'required',
                'jenis kelamin' => 'required',
                'alamat' => 'required',
                'agama' => 'required',
                'status nelayan' => 'required',
                'jenis nelayan' => 'required'
            ]);

            if (!$val) {
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                $data = [
                    'judul' => 'Data Nelayan',
                    'nelayan' => $this->model->getAllData()
                ];
                //load view//
                tampilan('nelayan/index', $data);
            } else {

                $data = [
                    'no kk' => $this->request->getPost('no kk'),
                    'nik' => $this->request->getPost('nik'),
                    'no kn' => $this->request->getPost('no kn'),
                    'nama' => $this->request->getPost('nama'),
                    'tgl' => $this->request->getPost('tgl'),
                    'jenis kelamin' => $this->request->getPost('jenis kelamin'),
                    'alamat' => $this->request->getPost('alamat'),
                    'agama' => $this->request->getPost('agama'),
                    'status nelayan' => $this->request->getPost('status nelayan'),
                    'jenis nelayan' => $this->request->getPost('jenis nelayan')

                ];


                //insert data
                $success = $this->model->tambah($data);
                if ($success) {
                    session()->setFlashdata('message', 'Ditambahkan');
                    return redirect()->to('/nelayan');
                }
            }
        } else {
            return redirect()->to('/nelayan');
        }
    }


    public function ubah()
    {

        if (isset($_POST['ubah'])) {
            $id = $this->request->getPost('id');
            $Nokk = $this->request->getPost('no kk');
            $db_Nokk = $this->model->getAllData($id)['no kk'];

            if ($Nokk === $db_Nokk) {
                $val = $this->validate([

                    'no kk' => [
                        'label' => 'Nomor Kartu Keluarga',
                        'rules' => 'required|numeric|max_length[16]'

                    ],

                    'nik' => [
                        'label' => 'Nomor Induk Keluarga',
                        'rules' => 'required|numeric|max_length[16]|is_unique[nelayan.nik]'

                    ],

                    'no kn' =>
                    [
                        'label' => 'Nomor Kartu Nelayan',
                        'rules' => 'required|numeric|max_length[16]|is_unique[nelayan.no kn]'

                    ],
                    'nama' => 'required',
                    'tgl' => 'required',
                    'jenis kelamin' => 'required',
                    'alamat' => 'required',
                    'alamat' => 'required',
                    'status nelayan' => 'required',
                    'jenis nelayan' => 'required'
                ]);
            } else {
                $val = $this->validate([

                    'no kk' => [
                        'label' => 'Nomor Kartu Keluarga',
                        'rules' => 'required|numeric|max_length[16]|is_unique[nelayan.no kk]'

                    ],

                    'nik' => [
                        'label' => 'Nomor Induk Keluarga',
                        'rules' => 'required|numeric|max_length[16]|is_unique[nelayan.nik]'

                    ],

                    'no kn' =>
                    [
                        'label' => 'Nomor Kartu Nelayan',
                        'rules' => 'required|numeric|max_length[16]|is_unique[nelayan.no kn]'

                    ],
                    'nama' => 'required',
                    'tgl   ' => 'required',
                    'jenis kelamin' => 'required',
                    'alamat' => 'required',
                    'agama' => 'required',
                    'status nelayan' => 'required',
                    'jenis nelayan' => 'required'
                ]);
            }



            if (!$val) {
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                $data = [
                    'judul' => 'nelayan',
                    'nelayan' => $this->model->getAllData()
                ];
                //load view//
                tampilan('nelayan/index', $data);
            } else {

                $id = $this->request->getPost('id');

                $data = [
                    'no_kk' => $this->request->getPost('no kk'),
                    'nik' => $this->request->getPost('nik'),
                    'no_kn' => $this->request->getPost('no kn'),
                    'nama' => $this->request->getPost('nama'),
                    'tgl' => $this->request->getPost('tgl'),
                    'jenis kelamin' => $this->request->getPost('jenis kelamin'),
                    'alamat' => $this->request->getPost('alamat'),
                    'agama' => $this->request->getPost('agama'),
                    'status nelayan' => $this->request->getPost('status nelayan'),
                    'jenis nelayan' => $this->request->getPost('jenis nelayan')

                ];


                //Update data
                $success = $this->model->ubah($data, $id);
                if ($success) {
                    session()->setFlashdata('message', 'Di Ubah');
                    return redirect()->to('/nelayan');
                }
            }
        } else {
            return redirect()->to('/nelayan');
        }
    }


    public function hapus($id)
    {
        $this->model->hapus($id);
        session()->setFlashdata('message', ' Dihapus');
        return redirect()->to('/nelayan');
    }

    public function excel()
    {
        $data = [
            'nelayan' => $this->model->getAllData()
        ];
        echo view('nelayan/excel', $data);
    }
}
