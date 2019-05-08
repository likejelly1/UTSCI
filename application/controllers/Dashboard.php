<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != 'login') {
		    	return redirect('/login');
        }
        $this->load->model('Transaksi');
    }
	public function index()
	{
    $data['transaksi'] = json_encode($this->Transaksi->getSumTransaksi());
		$this->load->view('dashboard',$data);
  }
    // public function data()
    // {
    //     $this->load->view('table_data');
    // }

}
