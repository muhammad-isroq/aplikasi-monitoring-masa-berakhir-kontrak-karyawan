<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('Login_model');  //memanggil model Login_model
    }

	public function index(){ //Untuk menampilkan form login
		$this->load->view('v_login'); //memanggil v_login
	}

    public function login(){ //untuk memproses pada saat user mengklik login
        $user = $this->input->post('username',true);
        $pass = md5($this->input->post('password',true));

        // rule validasi
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run() != FALSE){ //tanda != artinya tidak sama dengan
            $where = array(
                'username' => $user,
                'password' => $pass
            );

            $cek_login = $this->Login_model->cek_login($where)->num_rows();
            //num_rows artinya dicek atau dihitung perbaris 
            if($cek_login > 0){  
                $sess_data = array(
                    'login' => 'OK',
                    'username' => $user 
                );
            //mendaftarkan session / si $sess_data
                $this->session->set_userdata($sess_data);

                redirect(base_url('Dashboard')); //jika cek login benar maka dialihkan ke index
            }
            else{
                $this->session->set_flashdata('error', 'Username atau Password salah');
                redirect(base_url('Auth')); // jika salah dialihkan kembali ke auth.php atau login
            }
            
        }
        else{           //jika validasi salah maka kembali ke tampilan login
            // Set flashdata untuk pesan kesalahan
            $this->session->set_flashdata('error', 'Username atau Password salah');
            $this->load->view('v_login');
        } 
    }
    public function logout (){
        $this->session->sess_destroy();

        redirect(base_url('Auth'));
    }
}