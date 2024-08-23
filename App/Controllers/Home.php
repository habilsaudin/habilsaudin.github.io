<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{

		helper('sn');
	}
	public function index()
	{
		$data = [
			'judul' => 'SELAMAT DATANG DI SISTEM INFORMASI PENDATAAN BANTUAN UNTUK NELAYAN PROV. SULAWESI TENGAH'
		];



		//load view//
		tampilan('Home/index', $data);
	}

	//--------------------------------------------------------------------

}
