<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Parameter;


class parameter extends Controller
{
    protected $model;
    public function __construct()
    {
        $this->model = new M_Parameter;
        helper('sn');
    }

    public function index()
    {



        $data = [
            'judul' => 'Data Parameter',
            'parameter' => $this->model->getAllData()
        ];
        //load view//
        tampilan('parameter/index', $data);
    }

    public function tambah()
    {

        if (isset($_POST['tambah'])) {
            $val = $this->validate([

                'no kk' => [
                    'label' => 'Nomor Kartu Keluarga',
                    'rules' => 'required|numeric|max_length[16]|is_unique[parameter.no kk]'

                ],

                'nama kepala keluarga' => [
                    'label' => 'Nama Kepala Keluarga',
                    'rules' => 'required|numeric|max_length[16]|is_unique[parameter.nama kepala keluarga]'

                ],

                'nik' => [
                    'label' => 'Nomor Induk Kelaurga',
                    'rules' => 'required|numeric|max_length[16]|is_unique[parameter.nik]'

                ],
                'no kn' => 'required',
                'alamat' => 'required',
                'status nelayan' => 'required',
                'pekerjaan istri' => 'required',
                'jumlah anggota keluarga' => 'required',
                'penghasilan perbulan/perhari' => 'required',
                'jenis nelayan' => 'required'
            ]);

            if (!$val) {
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                $data = [
                    'judul' => 'Data Parameter',
                    'parameter' => $this->model->getAllData()
                ];
                //load view//
                tampilan('parameter/index', $data);
            } else {

                $data = [
                    'no kk' => $this->request->getPost('no kk'),
                    'nama kepala keluarga' => $this->request->getPost('nama kepala keluarga'),
                    'nik' => $this->request->getPost('nik'),
                    'no kn' => $this->request->getPost('no kn'),
                    'alamat' => $this->request->getPost('alamat'),
                    'status nelayan' => $this->request->getPost('status nelayan'),
                    'pekerjaan istri' => $this->request->getPost('pekerjaan istri'),
                    'jumlah anggota keluarga' => $this->request->getPost('jumlah anggota keluarga'),
                    'penghasilan perbulan/perhari' => $this->request->getPost('penghasilan perbulan/perhari'),
                    'jenis nelayan' => $this->request->getPost('jenis nelayan')

                ];


                //insert data
                $success = $this->model->tambah($data);
                if ($success) {
                    session()->setFlashdata('message', 'Ditambahkan');
                    return redirect()->to('/parameter');
                }
            }
        } else {
            return redirect()->to('/parameter');
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

                    'nama kepala keluarga' => [
                        'label' => 'Nama Kepala Keluarga',
                        'rules' => 'required|numeric|max_length[16]|is_unique[parameter.nama kepala keluarga]'

                    ],

                    'nik' => [
                        'label' => 'Nomor Induk Kelaurga',
                        'rules' => 'required|numeric|max_length[16]|is_unique[parameter.nik]'

                    ],
                    'no kn' => 'required',
                    'alamat' => 'required',
                    'status nelayan' => 'required',
                    'pekerjaan istri' => 'required',
                    'jumlah anggota keluarga' => 'required',
                    'penghasilan perbulan/perhari' => 'required',
                    'jenis nelayan' => 'required'
                ]);
            } else {
                $val = $this->validate([

                    'no kk' => [
                        'label' => 'Nomor Kartu Keluarga',
                        'rules' => 'required|numeric|max_length[16]|is_unique[parameter.no kk]'

                    ],

                    'nik' => [
                        'label' => 'Nomor Induk Keluarga',
                        'rules' => 'required|numeric|max_length[16]|is_unique[parameter.nik]'

                    ],

                    'no kn' =>
                    [
                        'label' => 'Nomor Kartu parameter',
                        'rules' => 'required|numeric|max_length[16]|is_unique[parameter.no kn]'

                    ],
                    'nama' => 'required',
                    'tgl   ' => 'required',
                    'jenis kelamin' => 'required',
                    'alamat' => 'required',
                    'agama' => 'required',
                    'status parameter' => 'required',
                    'jenis parameter' => 'required'
                ]);
            }



            if (!$val) {
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                $data = [
                    'judul' => 'parameter',
                    'parameter' => $this->model->getAllData()
                ];
                //load view//
                tampilan('parameter/index', $data);
            } else {

                $id = $this->request->getPost('id');

                $data = [
                    'no kk' => $this->request->getPost('no kk'),
                    'nama kepala keluarga' => $this->request->getPost('nama kepala keluarga'),
                    'nik' => $this->request->getPost('nik'),
                    'no kn' => $this->request->getPost('no kn'),
                    'alamat' => $this->request->getPost('alamat'),
                    'status nelayan' => $this->request->getPost('status nelayan'),
                    'pekerjaan istri' => $this->request->getPost('pekerjaan istri'),
                    'jumlah anggota keluarga' => $this->request->getPost('jumlah anggota keluarga'),
                    'penghasilan perbulan/perhari' => $this->request->getPost('penghasilan perbulan/perhari'),
                    'jenis nelayan' => $this->request->getPost('jenis nelayan')

                ];


                //Update data
                $success = $this->model->ubah($data, $id);
                if ($success) {
                    session()->setFlashdata('message', 'Di Ubah');
                    return redirect()->to('/parameter');
                }
            }
        } else {
            return redirect()->to('/parameter');
        }
    }


    public function hapus($id)
    {
        $this->model->hapus($id);
        session()->setFlashdata('message', ' Dihapus');
        return redirect()->to('/parameter');
    }

    public function excel()
    {
        $data = [
            'parameter' => $this->model->getAllData()
        ];
        echo view('parameter/excel', $data);
    }
}
