<?php 

class auth extends CI_Controller{

public function __construct(){

	parent::__construct();

		$this->load->model('Model_login');
		$this->load->library('form_validation');
	}

public function index(){

	$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
	$this->form_validation->set_rules('password', 'Password', 'trim|required');

	if($this->form_validation->run() == false){
		$data["title"]="Halaman Login";

		$this->load->view('templates/templates_auth/auth_header', $data);

		$this->load->view('auth/login');

		$this->load->view('templates/templates_auth/auth_footer');
	}else{
		
		$this->_login();
	}

	
	}


public function registration(){


	$this->form_validation->set_rules('name', 'Name', 'required|trim');
	$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tabel_user.email]',['is_unique'=>'email ini sudah dipakai!']);
	$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]',['min_length'=>'Password terlalu pendek']);
	$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]',['matches'=>'Password Tidak Sama']);

		
		if($this->form_validation->run() == false){
			$data["title"]="Halaman Registrasi";

			$this->load->view('templates/templates_auth/auth_header', $data);
	
			$this->load->view('auth/registration');
		
			$this->load->view('templates/templates_auth/auth_footer');

		}else{
			$data= [
				'nama_user'  => htmlspecialchars($this->input->post('name', true)),
				'email'		=> htmlspecialchars( $this->input->post('email', true)),
				'password'	=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'gambar'	=>'default.jpg',
				'tanggal_dibuat'	=>time(),
				'role_id'	=> 2
			];

			$this->db->insert('tabel_user', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success"><b>Selamat!</b> anda berhasil membuat account. Silahkan Login</div>');
			redirect('Auth');
		}
		
		
		}

private function _login(){

	$email= $this->input->post('email');

	$password= $this->input->post('password');

	$user= $this->Model_login->cek_login($email);

	 		
	if ($user){

		// $ambil= $user->row();

		// $this->session->set_userdata(array('hak_akses'=>$ambil->hak_akses,'email'=>$email,'status_login'=>'masuk!!'));

		// redirect('Dashboard');


		//ada user
		
			if (password_verify($password, $user['password'])){$data =[
					'email' => $user['email'],
					'role_id'	=> $user['role_id'],
					'status' => 'login'
				];
				$this->session->set_userdata($data);
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger"><b>Password Salah</b></div>');
				redirect('Auth');
			}
				
		

		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger"><b>Email anda</b> tidak terdaftar!</div>');
			redirect('Auth');
		}
		
}

public function logout(){
	// $this->session->unset_userdata('email');
	// $this->session->unset_userdata('role_id');
	$this->session->sess_destroy();

	$this->session->set_flashdata('pesan', '<div class="alert alert-success"><b>Anda Berhasil Logout</b></div>');
	redirect('Auth');
}




}



 ?>