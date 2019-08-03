<?php

class artikel extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('model_artikel');
        $this->load->model('model_kategori');
        $this->load->library('form_validation');
        check_session();
    }


    public function index(){
        $data['record'] = $this->model_artikel->select_all()->result();
        $data["title"]="Daftar Artikel";
        $data["user"]= 	 $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/templates_admin/admin_header', $data);
        $this->load->view('artikel/index', $data); //load view
        $this->load->view('templates/templates_admin/admin_footer');

    }


    public function view(){
        $data['record'] = $this->model_artikel->select_all()->result();
        $data["title"]="Daftar Artikel";
        $data["user"]= 	 $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();
        $id = $this->uri->segment(3);
        //$artikel= $this->db->get_where('tabel_artikel',array('id'=>$id))->row_array();
        $data['artikel']    =$this->db->get_where('tabel_artikel',array('id'=>$id))->row_array();
        //$data['author'] = $this->db->get_where('tabel_user',$data['artikel']=['user_id'])->row_array();
        // var_dump($data['author']['nama_user']);
        // die;
    
        $this->load->view('templates/templates_admin/admin_header', $data);
        $this->load->view('artikel/view', $data);
        $this->load->view('templates/templates_admin/admin_footer');
    }


    public function post(){

    $data['record'] = $this->model_artikel->select_all()->result();
    $data["title"]  = "Daftar Artikel";
    $data["user"]   = $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();

    $data['kategori'] = $this->model_kategori->get_kategori();

    $this->form_validation->set_rules('judul', 'Judul', 'required',['required' => 'Judul Harus diisi']);
    $this->form_validation->set_rules('isi', 'Isi', 'required', ['required' => 'Isi Artikel Harus diisi']);


    if($this->form_validation->run() == FALSE){
        $this->load->view('templates/templates_admin/admin_header', $data);
        $this->load->view('Artikel/tambah', $data);
        $this->load->view('templates/templates_admin/admin_footer');
    }else{
        //kode upload image
        $config['upload_path'] = './assets/images/posts/';
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

        $this->model_artikel->create_artikel($post_image);

        //set messege
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissable"><button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button><strong>Artikel Berhasil Ditambahkan!</strong>.</div>');
        redirect('artikel');
    }

}

public function edit(){
    $data['record'] = $this->model_artikel->select_all()->result();
    $data["title"]  = "Update Artikel";
    $data["user"]   = $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();
    

    if(isset($_POST['submit'])){
        $config['upload_path'] = './assets/images/posts';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';

        $this->load->library('upload', $config);
        $this->upload->do_upload();
        $data= $this->upload->data();
        // echo print_r($data['file_name']);
        // die;
        $this->model_artikel->update($data['file_name']);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissable"><button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button><strong>Artikel Berhasil Diedit / dirubah!</strong>.</div>');
        redirect('artikel');

    }else{

        $id = $this->uri->segment(3);
        $data['row']    =$this->db->get_where('tabel_artikel',array('id'=>$id))->row_array();
        $data['kategori'] = $this->model_kategori->select_all()->result();
        // var_dump($data['row']);
        // echo "<hr/>";
        // print_r( $data['row']);
        // die;
        $this->load->view('templates/templates_admin/admin_header', $data);
        $this->load->view('Artikel/edit', $data);
        $this->load->view('templates/templates_admin/admin_footer');
    }

    

}

    public function hapus(){
        $id = $this->uri->segment(3);
        $this->model_artikel->delete_post($id);
        redirect('artikel');
         // di style code saya tidak pernah ada fungsi hapus memang somtime perlu ., ini ndak apa cuma tidak harus selalu buat
         // teknik lain adalah tambahkan field misal publish / aktive boolean jadi tidak akan ada relasi yg hilang 
         // saran tambahan sja , karena kalo data transaksi hilan karena fungsi ini jalan akan bahaya 
         // but its oke masih com pro
    }


}

?>