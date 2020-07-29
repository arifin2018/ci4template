<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		if (session()->get('email')=='') {
			session()->setFlashdata('gagal','Anda Belum Login !!!'); 
            return redirect()->to(base_url('login'));
		}
		$data=array (
			'title' => 'Home',
			'isi' => 'v_home',
		);
		echo view('layout/v_wrapper', $data);
	}

	//--------------------------------------------------------------------

}
