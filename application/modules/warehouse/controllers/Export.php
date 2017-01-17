<?php
class Export extends CI_Controller{
	function __construct(){
        parent::__construct();
			$this->load->model('warehouse/Warehouse');
    }	
	
	function index(){
       	  $data=array(
		  'title'=>'menu Export',
		  //'sidemenu'=>'<a href="'.base_url().'">Breakdown</a>',
		  //'view'=>'warehouse/import_acceptance_breakdown'
		  //'sidemenu'=>'<a href="'.base_url().'">Over Brengin</a>',
		  //'view'=>'warehouse/import_acceptance_overbrengin'
		  //'sidemenu'=>'<a href="'.base_url().'">Delivery</a>',
		  //'view'=>'warehouse/import_delivery_document_delivery'
		 // );
		  'sidemenu'=>'<a href="'.base_url().'">Export</a>',
		  'view'=>'warehouse/Export'
		  );
	      $this->load->view('template/home',$data);
	}
	
	function reloadBoxContent(){
	 $mydata=$this->input->post('mydata');
	 $myid=$this->input->post('myid');
	 
	 if($mydata=='export_acceptance_booking'){
		//$search=$this->Mhouse->getDataCustom("*","trcust_hdr"," WHERE Id='$myid'");  
		
	 } else if($mydata=='export_acceptance_approval'){
		// $search=$this->Mhouse->getDataCustom("a.Id as id_detail,a.IdAddrType,a.IdCustHeader,a.Address,a.Postal,a.Telp1,a.Telp2,a.Fax,a.isDefault,a.Remarks,b.Id as id_type,b.Name as nm_type",
		 //		 "trcust_dtladdress a",
		//		 "LEFT JOIN msaddr_type b ON a.IdAddrType=b.Id 
		//		  WHERE IdCustHeader='$myid'");
	 } else if($mydata=='export_acceptance_list_weighing'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Id as id_service,b.Name as nm_sevice","trcust_dtlsales a",
		 //		  "LEFT JOIN msservice b ON a.IdService=b.Id
		//		   WHERE IdCustHeader='$myid'");
	 } else if($mydata=='Weighing'){
		 //$search=$this->Mhouse->getDataCustom("a.Id as id_detail,a.IdAddrType,a.IdCustHeader,a.Address,a.Postal,a.Telp1,a.Telp2,a.Fax,a.isDefault,a.Remarks,b.Id as id_type,b.Name as nm_type",
		 //		 "trcust_dtladdress a",
		//		 "LEFT JOIN msaddr_type b ON a.IdAddrType=b.Id 
		//		  WHERE IdCustHeader='$myid'");
	 } else if($mydata=='export_acceptance_rcs'){
		 //$search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 //		 "trcust_dtlbusiness a",
		//		 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
		//		  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 }else if($mydata=='export_acceptance_void_weighing'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	 }else if($mydata=='export_acceptance_labeling'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	}else if($mydata=='export_cashier_list_invoice'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	}else if($mydata=='export_cashier_list_taxed'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	}else if($mydata=='export_cashier_list_overstay'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	}else if($mydata=='export_cashier_list_monitoring'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	}else if($mydata=='export_cashier_void_invoice'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	}else if($mydata=='export_storage_list_stockofname'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	}else if($mydata=='export_storage_fhl'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	}else if($mydata=='export_storage_fwb'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	}else if($mydata=='export_buildup_list'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	}else if($mydata=='export_buildup_monitoring'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	}else if($mydata=='export_buildup_uld'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	}else if($mydata=='export_buildup_ffm'){
		// $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		//		 "trcust_dtlcomm a",
		//		 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
		//		  LEFT JOIN msservice c ON b.IdService=c.Id 
		//		  WHERE a.IdCustHeader='$myid'");
	}else if($mydata=='export_buildup_offLoad'){
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
	$this->load->view('warehouse/'.$mydata,$data);
	 
	}
	

	
	
}
	