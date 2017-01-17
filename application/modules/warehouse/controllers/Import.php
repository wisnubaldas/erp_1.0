<?php
class Import extends CI_Controller{
	function __construct(){
        parent::__construct();
			$this->load->model('warehouse/Warehouse');
    }	
	
	function index(){
       	  $data=array(
		  'title'=>'menu Import',		  
		  'sidemenu'=>'<a href="'.base_url().'">Import</a>',
		  'view'=>'warehouse/import',
		  'view2'=>'warehouse/menu_warehouse_import'
		  );
	      $this->load->view('template/home',$data);
	}
	
	function reloadBoxContent(){
	 $mydata=$this->input->post('mydata');
	 $myid=$this->input->post('myid');
	 
	 if($mydata=='import_acceptance_breakdown'){
		//$search=$this->Mhouse->getDataCustom("*","trcust_hdr"," WHERE Id='$myid'");  
		
	 } else if($mydata=='import_acceptance_overbrengin'){
		// $search=$this->Mhouse->getDataCustom("a.Id as id_detail,a.IdAddrType,a.IdCustHeader,a.Address,a.Postal,a.Telp1,a.Telp2,a.Fax,a.isDefault,a.Remarks,b.Id as id_type,b.Name as nm_type",
		 //		 "trcust_dtladdress a",
		//		 "LEFT JOIN msaddr_type b ON a.IdAddrType=b.Id 
		//		  WHERE IdCustHeader='$myid'");
	 } else if($mydata=='import_acceptance_cargoout'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Id as id_service,b.Name as nm_sevice","trcust_dtlsales a",
		 //		  "LEFT JOIN msservice b ON a.IdService=b.Id
		//		   WHERE IdCustHeader='$myid'");
	 } else if($mydata=='import_acceptance_irregularities'){
		 //$search=$this->Mhouse->getDataCustom("a.Id as id_detail,a.IdAddrType,a.IdCustHeader,a.Address,a.Postal,a.Telp1,a.Telp2,a.Fax,a.isDefault,a.Remarks,b.Id as id_type,b.Name as nm_type",
		 //		 "trcust_dtladdress a",
		//		 "LEFT JOIN msaddr_type b ON a.IdAddrType=b.Id 
		//		  WHERE IdCustHeader='$myid'");
	 } else if($mydata=='import_acceptance_cargo_claim'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 }else if($mydata=='import_acceptance_cargo_damage'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 } else if($mydata=='import_storage_list_stockofname'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 } else if($mydata=='import_storage_list_location'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 } else if($mydata=='import_delivery_list_notice_of_arrival'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 } else if($mydata=='import_delivery_list_document_delivery'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 } else if($mydata=='import_delivery_list_proof_of_delivery'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 } else if($mydata=='import_delivery_void_document_delivery'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 } else if($mydata=='import_delivery_void_proof_of_delivery'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");	
	} else if($mydata=='import_cashier_Monitoring'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 } else if($mydata=='import_cashier_list_invoice'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 } else if($mydata=='import_cashier_list_taxed'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 } else if($mydata=='import_cashier_list_invoice_overstay'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 } else if($mydata=='import_cashier_list_pecahpos'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 } else if($mydata=='import_cashier_void_invoice'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 } else if($mydata=='invoice'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 }
	 
		/*  $data=array(
		 	'record'=>$search,
			'type'=>$this->Mhouse->getDataCustom("*","msaddr_type","ORDER BY Name"),
			'view2'=>'menu_warehouse_import'
			
		 ); */
		 $data='';
	$this->load->view('warehouse/'.$mydata,$data);
	 
}

	
	
}
	