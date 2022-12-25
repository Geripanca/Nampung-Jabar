<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
    public function index(){
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run() == false){
			$data['title'] = 'Nampung Jabar Login';
			$this->load->view('template/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('template/auth_footer');
		}else {
			$this->_login();
		}
	}
	private function _login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$akun = $this->db->get_where('akun', ['email' => $email])->row_array();
		if($akun){
			//terdapat user
			if($akun['is_active'] == 1){
				//cek password
				if(password_verify($password, $akun['password'])){
					$data= [
						'email' => $akun['email'],
						'role_id' => $akun['role_id']
					];
					$this->session->set_userdata($data);
					if($akun['role_id']==1){
						redirect('admin');
					}else if($akun['role_id']==2){
						redirect('user');
					}else{
						redirect('mitra');
					}
					
				} else{
					$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
					Wrong password!
		  			</div>');
					redirect('auth');
				}

			}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
			This Email has not been actived!
		  </div>');
			redirect('auth');
			}
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
			Email is not Register!
		  </div>');
			redirect('auth');
		}
	}
	
	public function registration(){

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[akun.email]',[
			'is_unique' => 'This email has alredy register'
		] 
	
		);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]',[
			'matches' => 'Password not match!',
			'min_length' =>'Password too short!'
		]);
			
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');



		if ($this->form_validation->run() == false){

			$data['title'] = 'Nampung Jabar Registration';
			$this->load->view('template/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('template/auth_footer');
		}else{
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password1', true),PASSWORD_DEFAULT),
				'image'=> 'default.jpg',
				'role_id' => 2,
				'is_active' => 1,
				'date_creation' => time()			
			];

			$this->db->insert('akun', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Your Account has been Created, Please Login!
		  </div>');
			redirect('auth');
		}

	}
	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			You have been Log Out
		  </div>');
			redirect('auth');
	}
	public function blocked()
    {
        $this->load->view('Auth/blocked');
    }
    
}