<?php
class Custom extends CI_Controller{
	function __construct(){
        parent::__construct();
			$this->load->model('warehouse/Warehouse');
    }	
	
	function index(){
       	  $data=array(
		  'title'=>'menu Custom',
		  'sidemenu'=>'<a href="'.base_url().'">Custom</a>',
		  'view'=>'warehouse/custom'
		  );	      
	      $this->load->view('template/home',$data);
	}
	function reloadBoxContent(){
	 $mydata=$this->input->post('mydata');
	 $myid=$this->input->post('myid');
	
	if($mydata=='custom_inward_FWB'){
	
	} else if($mydata=='custom_inward_FFM'){

	} else if($mydata=='custom_inward_flatfile'){
	
	} else if($mydata=='custom_outward_dataexport'){
		
	} else if($mydata=='custom_outward_flatfile'){
	
	
	 }
	$data='';
	$this->load->view('warehouse/'.$mydata,$data);
	
	
	
	}

	
	
}
	