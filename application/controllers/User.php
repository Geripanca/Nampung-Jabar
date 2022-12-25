<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Welcome User';
        $data['akun'] = $this->db->get_where('akun', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('template/header_user', $data);
        $this->load->view('template/sidebar_user', $data);
        $this->load->view('template/topbar_user', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer_user');
    }
}