<?php
class Cargo_imp extends CI_Controller{
	function __construct(){
        parent::__construct();
			$this->load->model('warehouse/Warehouse');
    }
	
	function index(){
       	  $data=array(
		  'title'=>'menu Cargo IMP',
		  //'sidemenu'=>'<a href="'.base_url().'">Breakdown</a>',
		  //'view'=>'warehouse/import_acceptance_breakdown'
		  //'sidemenu'=>'<a href="'.base_url().'">Over Brengin</a>',
		  //'view'=>'warehouse/import_acceptance_overbrengin'
		  //'sidemenu'=>'<a href="'.base_url().'">Delivery</a>',
		  //'view'=>'warehouse/import_delivery_document_delivery'
		 // );
		  'sidemenu'=>'<a href="'.base_url().'">Cargo I.M.P</a>',
		  'view'=>'warehouse/Cargo_imp'
		  );
	      $this->load->view('template/home',$data);
	}
	
	function reloadBoxContent(){
	 $mydata=$this->input->post('mydata');
	 $myid=$this->input->post('myid');
	
	if($mydata=='cargo_imp_list_auth'){
	
	} else if($mydata=='cargo_imp_auth'){
	
	} else if($mydata=='cargo_imp_message_receiver'){
		 
	} else if($mydata=='cargo_imp_list_email'){	 
		 
	} else if($mydata=='cargo_imp_list_sita_address'){	 	 
		 
	} else if($mydata=='cargo_imp_list_version'){	 	 
		 
	} else if($mydata=='cargo_imp_version_sending'){	 	 	 
		 
		 
	} else if($mydata=='cargo_imp_version_receive'){		 
		 
		 
		 
		 
		 
		 
	}
	
	
	
	 $data='';
	$this->load->view('warehouse/'.$mydata,$data);
	}
}