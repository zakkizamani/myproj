<?php

class settings extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_settings');
        $this->load->library('form_validation');
        check_session();
    }


    public function index(){
        $data['record'] = $this->model_settings->select_all()->result();
        $data["title"]  = "daftar profile";
        $data["user"]   = 	 $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/templates_admin/admin_header', $data);
        $this->load->view('settings/company/index', $data); //load view
        $this->load->view('templates/templates_admin/admin_footer');

    }

    public function post(){

        $data['record'] = $this->model_settings->select_all()->result();
        $data["title"]  = "Pengisian Profile Perusahaan";
        $data["user"]   = $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();
    
        $this->form_validation->set_rules('nama_perusahaan', 'Perusahaan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/templates_admin/admin_header', $data);
            $this->load->view('settings/company/tambah', $data);
            $this->load->view('templates/templates_admin/admin_footer');
        }else{
            //kode upload image
            $config['upload_path'] = './assets/images/company/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20480';
            $config['max_width'] = '20000';
            $config['max_height'] = '20000';
    
            $this->load->library('upload', $config);
            // print_r($_FILES);
            // die;
    
            if(!$this->upload->do_upload()){
                $errors =array('error' => $this->upload->display_errors());
                $post_image = 'noimage.png';
            }else{
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];
            }
    
            $this->model_settings->buat_profile($post_image);
    
            //set messege
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissable"><button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button><strong>Profile perusahaan berhasil dibuat!</strong>.</div>');
            redirect('settings');
        }
    
    }

    public function edit(){
        $data["title"]  = "Update Profile Perusahaan";
        $data["user"]   = $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();
        
    
        if(isset($_POST['submit'])){
            $config['upload_path'] = './assets/images/company/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';
    
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $data= $this->upload->data();
            // echo print_r($data['file_name']);
            // die;
            $this->model_settings->update($data['file_name']);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissable"><button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button><strong>Profil perusahaan Berhasil Diedit / dirubah!</strong>.</div>');
            redirect('settings');
    
        }else{
    
            $id = $this->uri->segment(3);
            $data['row']    =$this->db->get_where('tabel_company',array('id'=>$id))->row_array();
            // var_dump($data['row']);
            // echo "<hr/>";
            // print_r( $data['row']);
            // die;
            $this->load->view('templates/templates_admin/admin_header', $data);
            $this->load->view('Settings/company/edit', $data);
            $this->load->view('templates/templates_admin/admin_footer');
        }
    
        
    
    }

    public function hapus(){
        $this->model_settings->delete();
    }


}



?>