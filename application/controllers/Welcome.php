<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('tema/admin/sidebar');
      	$this->load->view('tema/admin/topbar');
      	$this->load->view('admin/index', $data);
      	$this->load->view('tema/admin/footer');
   
	}

	public function berita()
	{
		$data['title'] = 'Berita';
		$this->load->view('tema/admin/sidebar');
      	$this->load->view('tema/admin/topbar');
      	$this->load->view('admin/berita', $data);
      	$this->load->view('tema/admin/footer');
   
	}

	public function penyiar()
	{
		$data['title'] = 'Penyiar';
		$this->load->view('tema/admin/sidebar');
      	$this->load->view('tema/admin/topbar');
      	$this->load->view('admin/penyiar', $data);
      	$this->load->view('tema/admin/footer');
   
	}

	public function jadwal()
	{
		$data['title'] = 'Jadwal';
		$this->load->view('tema/admin/sidebar');
      	$this->load->view('tema/admin/topbar');
      	$this->load->view('admin/jadwal', $data);
      	$this->load->view('tema/admin/footer');
   
	}

	public function user()
	{
		$data['title'] = 'User';
		$this->load->view('tema/admin/sidebar');
      	$this->load->view('tema/admin/topbar');
      	$this->load->view('admin/user', $data);
      	$this->load->view('tema/admin/footer');
   
	}


}
