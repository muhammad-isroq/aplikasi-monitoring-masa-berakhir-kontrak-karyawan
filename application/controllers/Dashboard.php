<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){  //function construct akan meload otomatis halaman login ketika aplikasi dibuka
		parent::__construct();

		if(empty($this->session->userdata('login'))){
		redirect('Auth');
		}
		$this->load->model('User_model');
	}

	public function index()
	{
		$data['users'] = $this->User_model->tampil_data()->result_array();

		$this->load->view('v_header', $data);
        $this->load->view('v_dashboard', $data);
	}

	public function update_email()
    {
        $id = $this->input->POST('id');
        $z = $this->input->POST('email1');
        $x = $this->input->POST('email2');
        

        $data = array(
            'email1' => $z,
            'email2' => $x            
        );


        $where = array('id' => $id);
        $this->M_supplier->update_data($data, $where);
        $this->session->set_flashdata('edit','data berhasil di update');
        redirect('Supplier');   
    }
}
