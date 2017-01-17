<?php
class User_profile extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
		$this->load->model('customer/Mhouse');
    }	
	
    function index(){
       	  $data=array(
		  'title'=>'User Profile',
		  'sidebar'=>'aktif',
		  'sidemenu'=>'<a href="'.base_url().'">User Profile</a>',
		  'view'=>'user_profiles/form_user'
		  );
	      $this->load->view('template/home',$data);
	}

    function update_user(){
       	  $data=array(
		  'title'=>'menu Customers',
		  'sidebar'=>'aktif',
		  'sidemenu'=>'<a href="'.base_url().'">crm</a>',
		  'view'=>'customer/crm'
		  );
	      $this->load->view('template/home',$data);
	}



}