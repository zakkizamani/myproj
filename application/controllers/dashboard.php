<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function __construct(){

		parent::__construct();
	
			$this->load->model('Model_login');
			$this->load->library('form_validation');
			check_session();
		}
	

	public function index()
	{	
		$this->load->model('model_artikel');
        $this->load->model('model_kategori');
        $this->load->model('model_menu');
        $this->load->model('model_settings');
        $this->load->model('model_slider');
        $data= array(
            'total_artikel'    => $this->model_artikel->total_rows(),
            'total_kategori'     => $this->model_kategori->total_rows(),
            'total_menu'      => $this->model_menu->total_rows(),
            'total_slider'   => $this->model_slider->total_rows(),
            'total_settings'      => $this->model_settings->total_rows()
            );

		$data["title"]="Halaman Panel Admin";
		$data["user"]= 	 $this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();
		$this->load->view('templates/templates_admin/admin_header', $data);
		$this->load->view('dashboard/dashboard', $data);
		$this->load->view('templates/templates_admin/admin_footer');
	}
}
