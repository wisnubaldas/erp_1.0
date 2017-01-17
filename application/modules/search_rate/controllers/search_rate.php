<?php
class Search_rate extends CI_Controller{
	var $view2='';
	public $ses='';
	
	public function __construct()
	{
		parent::__construct();
		  if($this->session->userdata('login_rate') != TRUE ){
            $this->session->set_flashdata('notif','You Must Login First !');
        };
		$this->ses=$this->session->userdata('GroupName');
		
		$this->load->model('search_rate/My_model');
	}
		
    function index(){
		  if($this->session->userdata('login_rate') != TRUE ){
            $this->load->view('search_rate/login');
        } else {
		   redirect('search_rate/Search_rate/home_rate');		
			
		} 
}
    function cek_login() {

        $username =$this->input->post('usr');
        $password =md5($this->input->post('psw'));
        //query the database
        $result =$this->My_model->getDataCustom("a.*,b.Id as GroupId,b.GroupName",
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
                    'login_rate'=>TRUE,
                );
                //set session with value from database
                $this->session->set_userdata($sess_array);
                redirect('search_rate/Search_rate/home_rate');
            }
            return TRUE;
        } else {
            //if form validate false
			 $data = array(
             'message' =>'Username or Password is wrong',
			 );
            $this->load->view('search_rate/login',$data);
			
        }
    }
    function home_rate(){
       	  $data=array(
		  'title'=>$this->ses,
		  'modulname'=>'Rate Searching',
		  'scrumb'=>'<a href="'.base_url().'search_rate/Search_rate" class="breadcrumb">Dashboard</a> Dashboard',
/*		  'Prospect'=>$this->Mhouse->count_record("trcust_hdr","WHERE Status='Prospect'"),
		  'Customer'=>$this->Mhouse->count_record("trcust_hdr","WHERE Status='Customer'"),
		  'aktive'=>$this->Mhouse->count_record("trcust_hdr","WHERE isActive='1'"),
		  'nonaktive'=>$this->Mhouse->count_record("trcust_hdr","WHERE isActive='0'"),
		  'sidemenu'=>'<a href="'.base_url().'">dashboard</a>',*/
		  'view2'=>'search_rate/menu_search_rate',
		  'view'=>'search_rate/dashboard'
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
 
     function logout() {
        $this->session->unset_userdata('idusr');
        $this->session->unset_userdata('Email');
        $this->session->unset_userdata('IdGroupUsr');
		$this->session->unset_userdata('GroupId');
		$this->session->unset_userdata('GroupName');
		$this->session->unset_userdata('usr_FullName');
		
        $this->session->unset_userdata('DepartemenCode');
        $this->session->unset_userdata('login_rate');
        $this->session->set_flashdata('notif','THANK YOU FOR LOGIN IN THIS APP');
        redirect('');
    }
}


