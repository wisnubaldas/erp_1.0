<?php
class Front extends CI_Controller{
    function __construct(){
        parent::__construct();
        //$this->load->model('model_app');
    }	
	
    function index(){
       	  $data=array(
		  'title'=>' Customer List',
		  'view'=>'customer/list_customers'
		  );
	      $this->load->view('template/home',$data);
	}
    function home(){
          $data=array(
		  'title'=>'Welcome',
		  'view'=>'front/home'
		  );
	      $this->load->view('template/template_front',$data);
    }
    function quick(){
          $data=array(
		  'title'=>'Welcome',
		  'view'=>'front/quick'
		  );
	      $this->load->view('template/template_front',$data);
    }
    function qmaterial(){
          $data=array(
		  'title'=>'Welcome',
		  'view'=>'front/qmaterial'
		  );
	      $this->load->view('template/template_front',$data);
    }
}