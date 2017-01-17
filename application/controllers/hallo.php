<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Hallo extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    

	
 function hallo(){
	 echo 'hallohallohallohallo';
/*		$data=array(
		  'title'=>'List data',
		  'view'=>'template/dashboard'
		  );
		  $this->load->view('template/home',$data);	*/
}		
	
	
}
