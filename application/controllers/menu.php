<?php

class menu extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_menu');
        $this->load->library('form_validation');
        check_session();
    }

    function index() {
        $data['record'] = $this->model_menu->select_all()->result();
        $data["user"]= 	 $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();
        $data["title"]="menu";
        $data["title_home"]="Daftar menu";

		$this->load->view('templates/templates_admin/admin_header', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('templates/templates_admin/admin_footer');
    }

    function post() {

        $this->form_validation->set_rules('nama', 'Nama', 'required|is_unique[tabel_menu.nama_menu]', ['required' => 'Nama menu harus di isi']);
        $this->form_validation->set_rules('link', 'Link', 'required|trim|is_unique[tabel_menu.link]', ['required' => 'Link untuk menu harus di isi juga']);
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim', ['required' => 'Nama icon harus di isi']);
        $this->form_validation->set_rules('parent', 'Parent', 'required|trim');
        $data["title"]="Tambah menu";
        $data["user"]= 	 $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();

        if($this->form_validation->run() == false){
            $data["parent"]   = $this->model_menu->select_parent()->result();
            $this->load->view('templates/templates_admin/admin_header', $data);
            $this->load->view('menu/tambah', $data); //load view
            $this->load->view('templates/templates_admin/admin_footer');
        }else{
            $this->model_menu->simpan(); 
            $this->session->set_flashdata('pesan', '<div class="alert alert-success "><b> data berhasil ditambah </b></div>'); 
            redirect('menu');
        }
        
    }

    function edit(){

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $data["title"]="Edit menu";
        $data["user"]= 	 $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();

        if($this->form_validation->run() == false){
            $id= $this->uri->segment(3);
            $data['row']=$this->db->get_where('tabel_menu',array('id'=>$id))->row_array();
            $data["parent"]   = $this->model_menu->select_parent()->result();

            $this->load->view('templates/templates_admin/admin_header', $data);
            $this->load->view('menu/edit', $data); //load view
            $this->load->view('templates/templates_admin/admin_footer');
            
        }else{
            
            $this->model_menu->update();  
            $this->session->set_flashdata('pesan', '<div class="alert alert-success "><b> data berhasil diupdate </b></div>'); 
            redirect('menu');
        }
        
    }

    function delete(){
        $this->db->where('id',$this->uri->segment(3));
        $this->db->delete('tabel_menu');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success "><b> data berhasil didelete! </b></div>'); 
        redirect('menu');
    }

    
}
?>

