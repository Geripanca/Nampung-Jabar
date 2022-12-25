<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    //constructor

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        if(!$this->session->userdata('email')){
            redirect('auth');
        }
    
    }
    public function index()
    {
        $data['title'] = 'Artikel';
        $data['akun'] = $this->db->get_where('akun', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['kembali'] = '';
        $data['artikel'] = $this->db->get('artikel')->result_array();
         $this->load->view('template/header_admin', $data);
         $this->load->view('template/sidebar_admin');
         $this->load->view('template/topbar_admin', $data);
         $this->load->view('artikel/index', $data);
         $this->load->view('template/footer_admin');

        //tampilkan
        
    }
    public function tambahdata()
    {
     $data['title'] = 'Tambah Data Artikel';
     $data['akun'] = $this->db->get_where('akun', ['email' => 
     $this->session->userdata('email')])->row_array();
     $data['kembali'] = '';
     //rules form validation
     $this->form_validation->set_rules('name', 'Name', 'required|trim');
     $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim|max_length[70]');
     $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim|max_length[500]');
   
     
     //fungsi
     
    
     if($this->form_validation->run() == TRUE){
        $config['upload_path'] = './upload/artikel';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']             = 100000;
        $config['max_width']            = 1024000;
        $config['max_height']           = 768000;
        $config['file_name'] = $_FILES['foto_artikel']['name'];
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
	    if (!empty($_FILES['foto_artikel']['name'])) {
	        if ( $this->upload->do_upload('foto_artikel') ) {
	            $foto = $this->upload->data();
                $data = [
                    'name' => $this->input->post('name', true),
                    'alamat' => $this->input->post('alamat', true),
                    'deskripsi' => $this->input->post('deskripsi', true),
                    'poster_artikel' => $foto['file_name'],
                    'date' => time()
                ];
                $this->db->insert('artikel', $data);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('artikel/index');
	            
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
        $this->load->view('artikel/tambahdata', $data);
        $this->load->view('template/footer_admin');
     }

     }
   //edit data list desa wisata
   public function editdata($id)
   {
    $data['title'] = 'Edit Data Artikel';
    $data['artikel'] = $this->db->get_where('artikel', ['id' => $id])->row_array();
    $data['akun'] = $this->db->get_where('akun', ['email' => 
    $this->session->userdata('email')])->row_array();
    $data['kembali'] = '';
    $this->load->view('template/header_admin', $data);
    $this->load->view('template/sidebar_admin');
    $this->load->view('template/topbar_admin', $data);
    $this->load->view('artikel/editdata', $data);
    $this->load->view('template/footer_admin'); 
}
    public function editdata2(){
        $path = './upload/artikel/';
        $config['upload_path'] = './upload/artikel';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']             = 100000;
        $config['max_width']            = 1024000;
        $config['max_height']           = 768000;
        $config['file_name'] = $_FILES['foto_artikel']['name'];
        $this->upload->initialize($config);
        if (!empty($_FILES['foto_artikel']['name'])) {
	        if ( $this->upload->do_upload('foto_artikel') ) {
	            $foto = $this->upload->data();
                $data = [
                    'name' => $this->input->post('name', true),
                    'alamat' => $this->input->post('alamat', true),
                    'deskripsi' => $this->input->post('deskripsi', true),
                    'poster_artikel' => $foto['file_name'],
                    'date' => time()
                ];
                $id   = $this->input->post('id', true);
                @unlink($path.$this->input->post('foto_lama'));
                $this->db->where('id', $id);
                $this->db->update('artikel', $data);
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('artikel/index');
	            
	        }else {
              die("gagal update");
	        }
	    }else {
	      echo "data tidak dapat diupdate";
	    }

    }
   
   //hapus data desa 
   public function hapusdata($id, $foto){
    $config['upload_path'] = './upload/artikel';
    $this->upload->initialize($config);
       $this->db->where('id', $id);
       if ($this->db->delete('artikel') != null){
        $this->session->set_flashdata('flash', 'Gagal Dihapus');
           redirect('artikel/index');
       }else{
        $this->session->set_flashdata('flash', 'Dihapus');
        $path = './upload/artikel/';
        @unlink($path.$foto['file_name']);
       }
   }


}


