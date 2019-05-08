<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != 'login') {
		    	return redirect('/login');
		    }
    }
	public function index()
	{
		$this->load->view('dashboard');
  }
    // public function data()
    // {
    //     $this->load->view('table_data');
    // }
}
