<?php
class Forwarder extends CI_Controller{
	var $view2='';
	public $ses='';
	
	public function __construct()
	{
		parent::__construct();
		  if($this->session->userdata('login_forwarder') != TRUE ){
            $this->session->set_flashdata('notif','You Must Login First !');
             //$this->load->view('logistic/login');
        };
		$this->ses=$this->session->userdata('GroupName');
		
        $this->load->model('Mhouse');
		$this->load->model('logistic/Model_inquiry');
	}
		
    function index(){
		  if($this->session->userdata('login_forwarder') != TRUE ){
            $this->load->view('logistic/login');
        } else {
		   redirect('logistic/Forwarder/Forwarder');		
			
		} 
}
    function cek_login() {

        $username =$this->input->post('us');
        $password =md5($this->input->post('ps'));
        //query the database
        $result =$this->Model_inquiry->getDataCustom("a.*,b.Id as GroupId,b.GroupName",
				 "msuser a",
				 "INNER JOIN msgroup_usr b ON a.IdGroupUsr=b.Id
				  WHERE a.Email='$username' AND Password='$password'
				 ");
        if($result) {
			
            $sess_array = array();
            foreach($result as $row) {
                //create the session
                $sess_array = array(
                    'idusr' => $row->Id,
                    'Email' => $row->Email,
                    'IdGroupUsr'=>$row->IdGroupUsr,
					'GroupName'=>$row->GroupName,
					'GroupId'=>$row->GroupId,
                    'DepartemenCode'=>$row->DepartemenCode,
					'usr_FullName'=>$row->FullName,
                    'login_forwarder'=>TRUE,
                );
                //set session with value from database
                $this->session->set_userdata($sess_array);
                redirect('logistic/Forwarder/forwarder');
            }
            return TRUE;
        } else {
            //if form validate false
			 $data = array(
             'message' =>'Username or Password is wrong',
			 );
            $this->load->view('logistic/login',$data);
			
        }
    }

    function logout() {
        $this->session->unset_userdata('idusr');
        $this->session->unset_userdata('Email');
        $this->session->unset_userdata('IdGroupUsr');
		$this->session->unset_userdata('GroupId');
		$this->session->unset_userdata('GroupName');
		
        $this->session->unset_userdata('DepartemenCode');
        $this->session->unset_userdata('login_forwarder');
        $this->session->set_flashdata('notif','THANK YOU FOR LOGIN IN THIS APP');
        redirect('logistic/Forwarder');
    }

    function forwarder(){
       	  $data=array(
		  'title'=>$this->ses,
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


