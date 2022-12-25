<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        
    }
    public function index()
    {
        $data['title'] = 'Beranda';
        $data['akun'] = $this->db->get_where('akun', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('template/header_admin', $data);
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('template/topbar_admin', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer_admin');
    }

    public function peran()
    {
        $data['title'] = 'Peran';
        $data['akun'] = $this->db->get_where('akun', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('template/header_admin', $data);
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('template/topbar_admin', $data);
        $this->load->view('admin/peran', $data);
        $this->load->view('template/footer_admin');
    }
}

