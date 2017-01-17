<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rate_customer extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $data=array(
            'view'=>'ok'
        );
        $this->load->view('rate_view/dashboard',$data);
    }

}
