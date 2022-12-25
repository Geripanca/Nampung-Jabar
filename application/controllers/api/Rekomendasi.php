<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';
class Rekomendasi extends REST_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index_get(){
        $id = $this->get('id');
        if ($id == null){
            $rekomendasi = $data['rekomendasi'] = $this->db->get('rekomendasi')->result_array();
        }else{
            $rekomendasi = $data['rekomendasi'] = $this->db->get_where('rekomendasi', ['id' => $id])->result_array();
        }
        
        if ($rekomendasi){
            $this->response([
                'status' => TRUE,
                'data' => $rekomendasi
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => 'Id not Found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

}
?>