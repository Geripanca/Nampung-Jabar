<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        
    }
    public function index()
    {
        $data['title'] = 'Welcome Mitra';
        $data['akun'] = $this->db->get_where('akun', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('template/header_mitra', $data);
        $this->load->view('template/sidebar_mitra', $data);
        $this->load->view('template/topbar_mitra', $data);
        $this->load->view('mitra/index', $data);
        $this->load->view('template/footer_mitra');
    }
    //kelola Cisande

    public function kelolacisande(){
        $data['title'] = 'Kelola Cisande';
        $data['akun'] = $this->db->get_where('akun', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('template/header_mitra', $data);
        $this->load->view('template/sidebar_mitra', $data);
        $this->load->view('template/topbar_mitra', $data);
        $this->load->view('mitra/cisande/kelolacisande', $data);
        $this->load->view('template/footer_mitra');
    }
    public function joincisande(){
        $data['title'] = 'Kelola Cisande';
        $data['akun'] = $this->db->get_where('akun', ['email' =>
        $this->session->userdata('email')])->row_array();
        $coder = '123456';
        $this->form_validation->set_rules('code', 'Code', 'required');
        if($this->form_validation->run() == true){
            $code = $this->input->post('code');
            if ($code == $coder){
                redirect('mitra/kelolacisande');
            }else{
            $this->load->view('template/header_mitra', $data);
            $this->load->view('template/sidebar_mitra', $data);
            $this->load->view('template/topbar_mitra', $data);
            $this->load->view('mitra/cisande/joincisande', $data);
            $this->load->view('template/footer_mitra');
            }
        }else{
            $this->load->view('template/header_mitra', $data);
            $this->load->view('template/sidebar_mitra', $data);
            $this->load->view('template/topbar_mitra', $data);
            $this->load->view('mitra/cisande/joincisande', $data);
            $this->load->view('template/footer_mitra');
        }
        
    }



    // Kelola Cimahi
    public function kelolacimahi(){
        $data['title'] = 'Kelola Cimahi';
        $data['akun'] = $this->db->get_where('akun', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('template/header_mitra', $data);
        $this->load->view('template/sidebar_mitra', $data);
        $this->load->view('template/topbar_mitra', $data);
        $this->load->view('mitra/kelolacimahi', $data);
        $this->load->view('template/footer_mitra');
    }
}