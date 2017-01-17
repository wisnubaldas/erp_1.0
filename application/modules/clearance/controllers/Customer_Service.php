<?php
class Customer_Service extends CI_Controller{
	function __construct(){
        parent::__construct();
			$this->load->model('clearance/Clearance');
    }	
	
	function index(){
       	  $data=array(
		  'title'=>'menu Customer Service',
		  //'sidemenu'=>'<a href="'.base_url().'">Breakdown</a>',
		  //'view'=>'warehouse/import_acceptance_breakdown'
		  //'sidemenu'=>'<a href="'.base_url().'">Over Brengin</a>',
		  //'view'=>'warehouse/import_acceptance_overbrengin'
		  //'sidemenu'=>'<a href="'.base_url().'">Delivery</a>',
		  //'view'=>'warehouse/import_delivery_document_delivery'
		 // );
		  'sidemenu'=>'<a href="'.base_url().'">Customer Service</a>',
		  'view'=>'clearance/customer_service'
		  );
	      $this->load->view('template/home',$data);
	}
	
	function reloadBoxContent(){
	 $mydata=$this->input->post('mydata');
	 $myid=$this->input->post('myid');
	 
	 if($mydata=='master_operation_countrycode'){
		//$search=$this->Mhouse->getDataCustom("*","trcust_hdr"," WHERE Id='$myid'");  
		
	 } else if($mydata=='master_operation_placecode'){
		// $search=$this->Mhouse->getDataCustom("a.Id as id_detail,a.IdAddrType,a.IdCustHeader,a.Address,a.Postal,a.Telp1,a.Telp2,a.Fax,a.isDefault,a.Remarks,b.Id as id_type,b.Name as nm_type",
		 //		 "trcust_dtladdress a",
		//		 "LEFT JOIN msaddr_type b ON a.IdAddrType=b.Id 
		//		  WHERE IdCustHeader='$myid'");
	 } else if($mydata=='master_operation_airport'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Id as id_service,b.Name as nm_sevice","trcust_dtlsales a",
		 //		  "LEFT JOIN msservice b ON a.IdService=b.Id
		//		   WHERE IdCustHeader='$myid'");
	 } else if($mydata=='master_operation_warehousecode'){
		 //$search=$this->Mhouse->getDataCustom("a.Id as id_detail,a.IdAddrType,a.IdCustHeader,a.Address,a.Postal,a.Telp1,a.Telp2,a.Fax,a.isDefault,a.Remarks,b.Id as id_type,b.Name as nm_type",
		 //		 "trcust_dtladdress a",
		//		 "LEFT JOIN msaddr_type b ON a.IdAddrType=b.Id 
		//		  WHERE IdCustHeader='$myid'");
	 } else if($mydata=='master_operation_route'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	} else if($mydata=='master_operation_airlines'){
		 //$search=$this->Mhouse->getDataCustom("a.Id as id_detail,a.IdAddrType,a.IdCustHeader,a.Address,a.Postal,a.Telp1,a.Telp2,a.Fax,a.isDefault,a.Remarks,b.Id as id_type,b.Name as nm_type",
		 //		 "trcust_dtladdress a",
		//		 "LEFT JOIN msaddr_type b ON a.IdAddrType=b.Id 
		//		  WHERE IdCustHeader='$myid'");
	 } else if($mydata=='master_operation_flight'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");	
	} else if($mydata=='master_operation_harmonizecode'){
		 //$search=$this->Mhouse->getDataCustom("a.Id as id_detail,a.IdAddrType,a.IdCustHeader,a.Address,a.Postal,a.Telp1,a.Telp2,a.Fax,a.isDefault,a.Remarks,b.Id as id_type,b.Name as nm_type",
		 //		 "trcust_dtladdress a",
		//		 "LEFT JOIN msaddr_type b ON a.IdAddrType=b.Id 
		//		  WHERE IdCustHeader='$myid'");
	 } else if($mydata=='master_operation_location'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");		
	} else if($mydata=='master_operation_airlines'){
		 //$search=$this->Mhouse->getDataCustom("a.Id as id_detail,a.IdAddrType,a.IdCustHeader,a.Address,a.Postal,a.Telp1,a.Telp2,a.Fax,a.isDefault,a.Remarks,b.Id as id_type,b.Name as nm_type",
		 //		 "trcust_dtladdress a",
		//		 "LEFT JOIN msaddr_type b ON a.IdAddrType=b.Id 
		//		  WHERE IdCustHeader='$myid'");
	 } else if($mydata=='master_operation_flight'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");	
	} else if($mydata=='finance_rate_list'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");		
	}else if($mydata=='finance_rate_Aggrement'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 }else if($mydata=='master_finance_deposit'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	}else if($mydata=='master_list_customer'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");	
	}else if($mydata=='master_customer'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");	
	}else if($mydata=='master_void_customer'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");	
		
		
		
		
		
		
		
	 }
	 
		/*  $data=array(
		 	'record'=>$search,
			'type'=>$this->Mhouse->getDataCustom("*","msaddr_type","ORDER BY Name"),
			'servis'=>$this->Mhouse->getDataCustom("*","msservice","ORDER BY Name")
			
		 ); */
		 $data='';
	$this->load->view('clearance/'.$mydata,$data);
	 
	}
	

	
	
}
	