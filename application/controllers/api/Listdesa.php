<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';
class Listdesa extends REST_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index_get(){
        $id = $this->get('id');
        if ($id == null){
            $listdesa = $data['list'] = $this->db->get('list')->result_array();
        }else{
            $listdesa = $data['list'] = $this->db->get_where('list', ['id' => $id])->result_array();
        }
        
        if ($listdesa){
            $this->response([
                'status' => TRUE,
                'data' => $listdesa
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