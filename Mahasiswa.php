<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller
{
	
	
	public function index()
	{
		
		$this->load->view('index1');
	}

	public function tambah()
	{
		
		$this->load->view('tambah');
	}


	public function ubah1()
	{
		
		$this->load->view('ubah');
	}
	



	
}

?>