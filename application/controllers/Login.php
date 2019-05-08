<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
    function __construct(){
		parent::__construct();		
		$this->load->model('User');
 
	}
 
	function index(){
		$this->load->view('login');
	}
 
	function loginProcess(){
		$where = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
			// print_r($where);
		$cek = $this->User->cek_login("user",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $this->input->post('username'),
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("/dashboard"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logoutProcess(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
