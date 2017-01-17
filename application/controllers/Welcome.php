<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Welcome extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {

		$data=array(
		'view'=>'template/dashboard'
		);
		$this->load->view('template/home',$data);
    }
	
 function dragdrop(){
		$data=array(
		'view'=>'template/drop'
		);
		$this->load->view('template/home',$data);
}		
	
	
}
