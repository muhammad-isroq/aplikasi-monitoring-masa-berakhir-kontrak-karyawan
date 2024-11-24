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

    // Ambil data user pertama sebagai contoh, atau ganti sesuai kebutuhan
		// $data['users'] = $this->User_model->tampil_data()->row_array();



		$this->load->view('v_header', $data);
		$this->load->view('v_dashboard', $data);
	}


	public function update_email()
	{
		$id = $this->input->POST('id');
		$z = $this->input->POST('email1');
		$x = $this->input->POST('email2');
		$message1 = $this->input->post('message1');
		$message2 = $this->input->post('message2');
		$smtp_user = $this->input->post('smtp_user');
		$smtp_pass = $this->input->post('smtp_pass');
		


		$data = array(
			'email1' => $z,
			'email2' => $x,
			'message1' => $message1,
			'message2' => $message2,
			'smtp_user' => $smtp_user,
			'smtp_pass' => $smtp_pass            
		);


		$where = array('id' => $id);
		$this->User_model->update_data($data, $where);
		$this->session->set_flashdata('edit','data berhasil di update');
		redirect('Dashboard');   
	}

	public function update_user()
	{
		$id = $this->input->post('id');
		$username = $this->input->post('username');
    $password = md5($this->input->POST('password'));
    $nama_lengkap = $this->input->post('nama_lengkap');

    // Data untuk diupdate
    $data = array(
    	'username' => $username,
    	'password' => $password,
    	'nama_lengkap' => $nama_lengkap
    );

    // Jika password diisi, tambahkan ke data
    // if (!empty($password)) {
    //     $data['password'] = password_hash($password, PASSWORD_BCRYPT); // Enkripsi password
    // }

    // Update data di database
    $where = array('id' => $id);
    $this->User_model->update_data($data, $where);

    // Set flash message
    $this->session->set_flashdata('edit', 'Data user berhasil diperbarui.');

    // Redirect kembali ke dashboard
    redirect('Dashboard');
}



}
