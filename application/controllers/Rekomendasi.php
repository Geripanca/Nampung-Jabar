<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Rekomendasi extends CI_Controller
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
        $data['title'] = 'Rekomendasi';
        $data['akun'] = $this->db->get_where('akun', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['kembali'] = '';
        $data['rekomendasi'] = $this->db->get('rekomendasi')->result_array();
        //tampilkan
        $this->load->view('template/header_admin', $data);
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('template/topbar_admin', $data);
        $this->load->view('rekomendasi/index', $data);
        $this->load->view('template/footer_admin');
    }
    //tambah data rekomendasi desa wisata
    public function tambahdata()
    {
        $data['title'] = 'Tambah Data Rekomendasi';
        $data['akun'] = $this->db->get_where('akun', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['kembali'] = '';
        //query id
    
        $this->db->select('artikel.id');
        $this->db->from('artikel');
        $this->db->join('rekomendasi', 'rekomendasi.name = artikel.name');
        //validasi rekomendasi
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim|max_length[500]');
        if($this->form_validation->run() == TRUE){
            $config['upload_path'] = './upload/rekomendasi';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']             = 100000;
            $config['max_width']            = 1024000;
            $config['max_height']           = 768000;
            $config['file_name'] = $_FILES['thumb_rekomendasi']['name'];
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!empty($_FILES['thumb_rekomendasi']['name'])) {
                if ( $this->upload->do_upload('thumb_rekomendasi') ) {
                    $foto = $this->upload->data();
                    $data = [
                        'name' => $this->input->post('name', true),
                        'img' => $foto['file_name'],
                        'deskripsi' => $this->input->post('deskripsi', true),
                    ];
                    $this->db->insert('rekomendasi', $data);
                    $this->session->set_flashdata('flash', 'Ditambahkan');
                    redirect('rekomendasi/index');
                    
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
            $this->load->view('rekomendasi/tambahdata', $data);
            $this->load->view('template/footer_admin');
         }
    
    }
    //edit data rekomendasi desa wisata
    public function editdata($id)
    {
        $data['title'] = 'Edit Data Rekomendasi';
        $data['rekomendasi'] = $this->db->get_where('rekomendasi', ['id' => $id])->row_array();
        $data['akun'] = $this->db->get_where('akun', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['kembali'] = '';
        $this->load->view('template/header_admin', $data);
        $this->load->view('template/sidebar_admin');
        $this->load->view('template/topbar_admin', $data);
        $this->load->view('rekomendasi/editdata', $data);
        $this->load->view('template/footer_admin');
        //validasi 
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim|max_length[30]');
        $this->form_validation->set_rules('id_artikel', 'ID', 'required');
    }
    public function editdata2(){
        $path = './upload/rekomendasi/';
        $config['upload_path'] = './upload/rekomendasi';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']             = 100000;
        $config['max_width']            = 1024000;
        $config['max_height']           = 768000;
        $config['file_name'] = $_FILES['thumb_rekomendasi']['name'];
        $this->upload->initialize($config);
        if (!empty($_FILES['thumb_rekomendasi']['name'])) {
	        if ( $this->upload->do_upload('thumb_rekomendasi') ) {
	            $foto = $this->upload->data();
                $data = [
                    'name' => $this->input->post('name', true),
                    'deskripsi' => $this->input->post('deskripsi', true),
                    'img' => $foto['file_name'],
                    'id_artikel' => $this->input->post('id_artikel', true)
                ];
                $id   = $this->input->post('id', true);
                @unlink($path.$this->input->post('foto_lama'));
                $this->db->where('id', $id);
                $this->db->update('rekomendasi', $data);
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('rekomendasi/index');
	            
	        }else {
              die("gagal update");
	        }
	    }else {
	      echo "data tidak dapat diupdate";
	    }
    }
    //Delete Data
    public function hapusdata($id){
           $this->db->where('id', $id);
           if ($this->db->delete('rekomendasi') != null){
            $this->session->set_flashdata('flash', 'Gagal Dihapus');
               redirect('rekomendasi/index');
           }else{
            $this->session->set_flashdata('flash', 'Dihapus');
           }
       }
}