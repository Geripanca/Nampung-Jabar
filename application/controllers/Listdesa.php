<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Listdesa extends CI_Controller
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
        $data['title'] = 'List Desa';
        $data['akun'] = $this->db->get_where('akun', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['kembali'] = '';
        $data['list'] = $this->db->get('list')->result_array();
        //tampilkan
        $this->load->view('template/header_admin', $data);
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('template/topbar_admin', $data);
        $this->load->view('listdesa/index', $data);
        $this->load->view('template/footer_admin');
    }
    //tambah data list desa wisata
    public function tambahdata()
    {
    $data['title'] = 'Tambah Data List';
    $data['akun'] = $this->db->get_where('akun', ['email' => 
    $this->session->userdata('email')])->row_array();
    $data['kembali'] = '';
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('tentang', 'Tentang', 'required|trim|max_length[30]');
    $this->form_validation->set_rules('id_artikel', 'ID', 'required');
    if($this->form_validation->run() == TRUE){
        $config['upload_path'] = './upload/listdesa';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']             = 100000;
        $config['max_width']            = 1024000;
        $config['max_height']           = 768000;
        $config['file_name'] = $_FILES['thumb_list']['name'];
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!empty($_FILES['thumb_list']['name'])) {
            if ( $this->upload->do_upload('thumb_list') ) {
                $foto = $this->upload->data();
                $data = [
                    'name' => $this->input->post('name', true),
                    'img' => $foto['file_name'],
                    'tentang' => $this->input->post('tentang', true),
                    'id_artikel' => $this->input->post('id_artikel', true)
                ];
                $this->db->insert('list', $data);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('listdesa/index');
                
            }else {
              die("gagal upload");
            }
        }else {
          echo "tidak masuk";
        }
     }else{
        //  BACK
        $this->load->view('template/header_admin', $data);
        $this->load->view('template/sidebar_admin');
        $this->load->view('template/topbar_admin', $data);
        $this->load->view('listdesa/tambahdata', $data);
        $this->load->view('template/footer_admin');
     }

    }
    //Edit Data List
    public function editdata($id)
    {
    $data['title'] = 'Tambah Data List';
    $data['list'] = $this->db->get_where('list', ['id' => $id])->row_array();
    $data['akun'] = $this->db->get_where('akun', ['email' => 
    $this->session->userdata('email')])->row_array();
    $data['kembali'] = '';
    $this->load->view('template/header_admin', $data);
    $this->load->view('template/sidebar_admin');
    $this->load->view('template/topbar_admin', $data);
    $this->load->view('listdesa/editdata', $data);
    $this->load->view('template/footer_admin');
    //validasi 
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('tentang', 'Tentang', 'required|trim|max_length[30]');
    $this->form_validation->set_rules('id_artikel', 'ID', 'required');
    }
    public function editdata2(){
        $path = './upload/listdesa/';
        $config['upload_path'] = './upload/listdesa';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']             = 100000;
        $config['max_width']            = 1024000;
        $config['max_height']           = 768000;
        $config['file_name'] = $_FILES['thumb_list']['name'];
        $this->upload->initialize($config);
        if (!empty($_FILES['thumb_list']['name'])) {
	        if ( $this->upload->do_upload('thumb_list') ) {
	            $foto = $this->upload->data();
                $data = [
                    'name' => $this->input->post('name', true),
                    'img' => $foto['file_name'],
                    'tentang' => $this->input->post('tentang', true),
                    'id_artikel'=>$this->input->post('id_artikel', true)
                ];
                $id   = $this->input->post('id', true);
                @unlink($path.$this->input->post('foto_lama'));
                $this->db->where('id', $id);
                $this->db->update('list', $data);
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('listdesa/index');
	            
	        }else {
              die("gagal update");
	        }
	    }else {
	      echo "data tidak dapat diupdate";
	    }
    }





    public function hapusdata($id){
        $this->db->where('id', $id);
        if ($this->db->delete('list') != null){
         $this->session->set_flashdata('flash', 'Gagal Dihapus');
            redirect('listdesa/index');
        }else{
         $this->session->set_flashdata('flash', 'Dihapus');
        }
    }
}