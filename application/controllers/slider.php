<?php

class slider extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('Model_slider'));
        check_session();
    }

    public function index() {
        $data['record'] = $this->Model_slider->select_all()->result();
        $data["title"]  = "Pengaturan Slider";
        $data["user"]   = 	 $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/templates_admin/admin_header', $data);
        $this->load->view('slider/index', $data); //load view
        $this->load->view('templates/templates_admin/admin_footer');
       }

    public function view(){
        $data['record'] = $this->Model_slider->select_all()->result();
        $data["title"]  = "Pengaturan Slider";
        $data["user"]   = 	 $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();
        $this->load->view('slider/view', $data); //load view
    }

    public function tambah() {
        $data['record'] = $this->Model_slider->select_all()->result();
        $data["title"]  = "Penambahan Slider";
        $data["user"]   = 	 $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();


        if (isset($_POST['submit'])) {
            $config['upload_path'] = './assets/images/slider/';
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $data = $this->upload->data();
            $this->Model_slider->simpan($data['file_name']);
            redirect('slider');
        } else {
            $data['record'] = $this->Model_slider->select_all()->result();
            $this->load->view('templates/templates_admin/admin_header', $data);
            $this->load->view('slider/tambah', $data); //load view
            $this->load->view('templates/templates_admin/admin_footer');
            
        }
    }

    public function edit() {
        $data['record'] = $this->Model_slider->select_all()->result();
        $data["title"]  = "Penambahan Slider";
        $data["user"]   = 	 $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();


        if (isset($_POST['submit'])) {
            $config['upload_path'] = './assets/images/slider/';
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $data = $this->upload->data();
            $this->Model_slider->update($data['file_name']);
            redirect('slider');
        } else {
            $id = $this->uri->segment(3);
            $data['row'] = $this->db->get_where('tabel_slider', array('id' => $id))->row_array();
            $this->load->view('templates/templates_admin/admin_header', $data);
            $this->load->view('slider/edit', $data); //load view
            $this->load->view('templates/templates_admin/admin_footer');
        }
    }

    public function hapus() {
        $this->db->where('id', $this->uri->segment(3));
        $this->db->delete('tabel_slider');
        redirect('slider');
    }

}
