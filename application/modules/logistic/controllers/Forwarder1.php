<?php
class Forwarder1 extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Mhouse');
		$this->load->model('logistic/Model_inquiry');
    }	
	
    function index(){
       	  $data=array(
		  'title'=>'menu Inquiry',
		  'modulname'=>'CRM for Forwarder',
		  'scrumb'=>'<a href="'.base_url().'logistic/Customer/dashboard" class="breadcrumb">Dashboard</a> Dashboard',
		  'Prospect'=>$this->Mhouse->count_record("trcust_hdr","WHERE Status='Prospect'"),
		  'Customer'=>$this->Mhouse->count_record("trcust_hdr","WHERE Status='Customer'"),
		  'aktive'=>$this->Mhouse->count_record("trcust_hdr","WHERE isActive='1'"),
		  'nonaktive'=>$this->Mhouse->count_record("trcust_hdr","WHERE isActive='0'"),
		  'sidemenu'=>'<a href="'.base_url().'">dashboard</a>',
		  'view2'=>'logistic/menu_forwarder',
		  'view'=>'logistic/dashboard'
		  );
	      $this->load->view('template/home',$data);
		  
	}
    function dashboard(){
       	  $data=array(
		  'title'=>'dashboard Customers',
		  'scrumb'=>'<a href="'.base_url().'logistic/Customer/dashboard" class="breadcrumb">Dashboard</a> Dashboard',
		  'Prospect'=>$this->Mhouse->count_record("trcust_hdr","WHERE Status='Prospect'"),
		  'Customer'=>$this->Mhouse->count_record("trcust_hdr","WHERE Status='Customer'"),
		  'aktive'=>$this->Mhouse->count_record("trcust_hdr","WHERE isActive='1'"),
		  'nonaktive'=>$this->Mhouse->count_record("trcust_hdr","WHERE isActive='0'"),
		  'sidemenu'=>'<a href="'.base_url().'">dashboard</a>',
		  'view2'=>'logistic/menu_forwarder',
		  'view'=>'logistic/dashboard'
		  );
	      $this->load->view('template/home',$data);
		  
}
 
}


