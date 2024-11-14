<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){  //function construct akan meload otomatis halaman login ketika aplikasi dibuka
		parent::__construct();

		if(empty($this->session->userdata('login'))){
		redirect('Auth');
		}
	}

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_dashboard');
        $this->load->view('templates/footer');
	}
}
