<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

 class BarangController extends CI_Controller 
 {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Barang");
        $this->load->model("Transaksi");
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $config['base_url'] = site_url('BarangController/index');
        $config['total_rows'] = $this->db->count_all('barang');
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $jumlah_pilihan = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = floor($jumlah_pilihan);



        // style Bootstrap
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav></div>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close'] = '</span>Next</li>';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_open'] = '</span></li>';
        // end style bootstrap

        $this->pagination->initialize($config);
        
        $data['page'] =  ($this->uri->segment(3)) ? $this->uri->segment(3) : 0 ;

        $data['item'] = $this->Barang->getBarangWithLimit($config['per_page'], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
        
        $this->load->view("table_data", $data);
    }
    public function create()
    {
        $this->load->view('barang/add_barang');
    }

    public function add()
    {
        $barang = $this->Barang;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if ($validation->run()) {
            $barang->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        return redirect('barangcontroller/');
    }
    public function edit($id)
    {
        $data['product'] = $this->Barang->getBarangById($id)->result();

        $this->load->view('barang/edit_barang', $data);
    }

    public function update($id = null)
    {
        if (!isset($id)) redirect('barang/edit_barang');
       
        $barang = $this->Barang;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if ($validation->run()) {
            $barang->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $barang->getBarangById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("barang/edit_barang", $data);
    }

    public function delete($id)
    {   
        $delete = $this->Barang->delete($id);
        if ($delete) {
            redirect($this->load->view('barang/list_barang'));
        }
    }

 }
 