<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Coba_json extends CI_Controller {

    function __construct(){
        parent::__construct();

    }

    public function index(){
        $url = "http://jsonplaceholder.typicode.com/posts/";
        $get_url = file_get_contents($url);
        $data = json_decode($get_url);

        $data_array = array(
            'datalist' => $data
        );
        $this->load->view('v_coba_json',$data_array);
    }
    
}  

