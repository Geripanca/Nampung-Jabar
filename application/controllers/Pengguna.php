<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pengguna extends CI_Controller
{
        //constructor
public function __construct()
{
    parent::__construct();
    if(!$this->session->userdata('email')){
        redirect('auth');
    }
}
    public function index()
    {
            $data['title'] = 'Kelola Pengguna';
            $data['akun'] = $this->db->get_where('akun', ['email' => 
            $this->session->userdata('email')])->row_array();
            $data['kembali'] = '';
            $data['pengguna'] = $this->db->get('pengguna')->result_array();
            //tampilkan
            $this->load->view('template/header_admin', $data);
            $this->load->view('template/sidebar_admin', $data);
            $this->load->view('template/topbar_admin', $data);
            $this->load->view('pengguna/index', $data);
            $this->load->view('template/footer_admin');
    }    
    public function hapusdata($id){
        $this->db->where('id', $id);
        if ($this->db->delete('pengguna') != null){
         $this->session->set_flashdata('flash', 'Gagal Dihapus');
            redirect('pengguna/index');
        }else{
         $this->session->set_flashdata('flash', 'Dihapus');
        }
    }
}