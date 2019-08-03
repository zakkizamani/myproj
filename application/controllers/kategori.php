<?php

class kategori extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_kategori');
        $this->load->library('form_validation');
        check_session();
    }

    function index() {
        $data['record'] = $this->model_kategori->select_all()->result();
        $data["user"]= 	 $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();
        $data["title"]="Kategori";
        $data["title_home"]="Daftar Kategori";

		$this->load->view('templates/templates_admin/admin_header', $data);
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/templates_admin/admin_footer');
    }

    function post() {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'Kategori harus diisi']);
        $data["title"]="Tambah Kategori";
        $data["user"]= 	 $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();

        if($this->form_validation->run() == false){
            $this->load->view('templates/templates_admin/admin_header', $data);
            $this->load->view('kategori/tambah'); //load view
            $this->load->view('templates/templates_admin/admin_footer');
        }else{
            $this->model_kategori->simpan(); 
            $this->session->set_flashdata('pesan', '<div class="alert alert-success "><b> data berhasil ditambah </b></div>'); 
            redirect('Kategori');
        }
        
    }

    function edit(){

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $data["title"]="Edit Kategori";
        $data["user"]= 	 $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();

        if($this->form_validation->run() == false){
            $id= $this->uri->segment(3);
            $data['row']=$this->db->get_where('tabel_kategori',array('id'=>$id))->row_array();

            $this->load->view('templates/templates_admin/admin_header', $data);
            $this->load->view('kategori/edit', $data); //load view
            $this->load->view('templates/templates_admin/admin_footer');
            
        }else{
            
            $this->model_kategori->update();  
            $this->session->set_flashdata('pesan', '<div class="alert alert-success "><b> data berhasil diupdate </b></div>'); 
            redirect('Kategori');
        }
        
    }

    function delete(){
        $this->db->where('id',$this->uri->segment(3));
        $this->db->delete('tabel_kategori');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success "><b> data berhasil didelete! </b></div>'); 
        redirect('kategori');
    }

    
}
?>

