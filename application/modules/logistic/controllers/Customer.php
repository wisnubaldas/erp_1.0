<?php
class Customer extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('logistic/model_app');
		$this->load->model('logistic/Mhouse');
    }	
	
    function index(){
       	  $data=array(
		  'title'=>'menu Customers',
		  'modulname'=>'CRM for Forwarder',
		  'scrumb'=>'<a href="'.base_url().'logistic/Customer" class="breadcrumb">Customer List</a> Customer List',
		  'sidemenu'=>'<a href="'.base_url().'">list_customer</a>',
		  'view2'=>'logistic/menu_forwarder',
		  'view'=>'logistic/customer/list_customer'
		  );
	      $this->load->view('template/home',$data);
	}
	
    function validation(){
       	  $data=array(
		  'title'=>'menu validation',
		  'sidemenu'=>'<a href="'.base_url().'">validation</a>',
		  'view'=>'logistic/validation'
		  );
	      $this->load->view('template/home',$data);
	}
    function validation2(){
       	  $data=array(
		  'title'=>'menu validation',
		  'sidemenu'=>'<a href="'.base_url().'">validation</a>',
		  'view'=>'logistic/validation2'
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
		  'view2'=>'logistic/customer/menu_customer',
		  'view'=>'logistic/customer/dashboard'
		  );
	      $this->load->view('template/home',$data);
		  
}
 function customer_detail(){
	 $idcust=$this->uri->segment(4);
       	  $data=array(
		  'title'=>'dashboard Customers',
		  'scrumb'=>'<a href="'.base_url().'logistic/Customer" class="breadcrumb">Customer List</a> Customer Details',
		  'idcust'=>$this->Mhouse->getDataCustom("a.Id as id_header,a.Name as companyname,b.Name as city,c.Name as country,a.Status,a.TotEmployee,a.Email,a.Website,a.isActive",
		  			"trcust_hdr a",
		  			"LEFT JOIN mscity b ON a.IdCity=b.Id
					 LEFT JOIN mscountry c ON a.IdCountry=c.Id
					 WHERE a.Id='$idcust' LIMIT 1"),
		  'Prospect'=>$this->Mhouse->count_record("trcust_hdr","WHERE Status='Prospect'"),
		  'sidemenu'=>'<a href="'.base_url().'">customer_detail</a>',
		  'record'=>$this->Mhouse->getDataCustom("*","trcust_hdr"," WHERE Id='$idcust'"),
		  'view'=>'logistic/customer/customer_detail',
		  'view2'=>'logistic/customer/menu_detail_customer',
		  );
//	 		print_r($data);
	      $this->load->view('template/home',$data);
	 
}

 function list_customer()
	{
		$idsession=$this->session->userdata('idusr');
		$nm_tabel='trcust_hdr a';
		$nm_tabel2='mscity b';
		$kolom1='a.IdCity';
		$kolom2='b.Id';
		
		$selected='a.Id as id_header,a.Name as Name,b.Name as city,c.Name as country,a.IdCity,a.TotEmployee,a.Status,a.Email,a.YearEst,a.CompanyInf,a.Website,a.TotEmployee,a.IdHolding,a.ActiveDate,a.VATNo,a.isActive,a.Status';
        $nm_coloum= array('a.Name,a.Name','a.Name','a.Name','b.Name','c.Name','a.Email','a.TotEmployee','a.isActive','a.Status');
        $orderby= array('a.Name' => 'DESC');
		$where=  array();
        $list = $this->Mhouse->get_datatables2($selected,$nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2);
        
		$data = array();
		$no = $_POST['start'];
		
		foreach ($list as $datalist){
			$no++;
			$row = array(
            'no' => $no,
            'id_header' =>$datalist->id_header,
            'Name' =>'<label class="md-color-light-blue-500 mytooltip">  
						<div class="mytooltiptext">
						<div class="uk-grid" data-uk-grid-margin="">
						  <div class="uk-width-medium-1-1">
							<label for="country">Active date : </label>
							  <label for="country">'.date("d-M-Y",strtotime($datalist->ActiveDate)).'</label>        
						 </div> 
						  <div class="uk-width-medium-1-1">
							<label for="country">VATNo : </label>
							  <label for="country">'.$datalist->VATNo.'</label>        
						 </div> 
						  <div class="uk-width-medium-1-1">
							<label for="country">Website : </label>
							  <label for="country"><a target="_new" href="http://'.$datalist->Website.'">'.$datalist->Website.'</a></label>        
						 </div>
						</div>
						</div><a href="'.base_url().'logistic/Customer/customer_detail/'.$datalist->id_header.'">'.$datalist->Name.'</a></label>',
			'city' =>$datalist->city,
			'country' =>$datalist->country,
			'YearEst' =>$datalist->YearEst,
			'CompanyInf' =>$datalist->CompanyInf,
			'Email' =>$datalist->Email,
			'Status' =>$datalist->Status=='Prospect'?'<span class="uk-badge uk-badge-warning">'.$datalist->Status.'</span>':'<span class="uk-badge uk-badge-primary">'.$datalist->Status.'</span>',
			'TotEmployee' =>'<span class="uk-badge uk-badge-notification md-bg-brown-800 uk-text-contrast">'.$datalist->TotEmployee.'</span>',
			'isActive' =>$datalist->isActive=='1'?'<span class="uk-badge uk-badge-success">YES</span>':'<span class="uk-badge uk-badge-danger">NO</span>',
			//'ETD' =>date('d-m-Y',strtotime($datalist->ETD)),

            );
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Mhouse->count_all2($nm_tabel,$nm_coloum,$nm_tabel2,$kolom1,$kolom2),
						"recordsFiltered" => $this->Mhouse->count_filtered2($nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
}


 function reloadBoxContent(){
	 $mydata=$this->input->post('mydata');
	 $myid=$this->input->post('myid');
	 
	 if($mydata=='general'){
		$search=$this->Mhouse->getDataCustom("*","trcust_hdr"," WHERE Id='$myid'");  
	 } else if($mydata=='address'){
		 $search=$this->Mhouse->getDataCustom("a.Id as id_detail,a.IdAddrType,a.IdCustHeader,a.Address,a.Postal,a.Telp1,a.Telp2,a.Fax,a.isDefault,a.Remarks,b.Id as id_type,b.Name as nm_type",
		 		 "trcust_dtladdress a",
				 "LEFT JOIN msaddr_type b ON a.IdAddrType=b.Id 
				  WHERE IdCustHeader='$myid'");
	 } else if($mydata=='sales'){
		 $search=$this->Mhouse->getDataCustom("a.*,b.Id as id_service,b.Name as nm_sevice","trcust_dtlsales a",
		 		  "LEFT JOIN msservice b ON a.IdService=b.Id
				   WHERE IdCustHeader='$myid'");
	 } else if($mydata=='service'){
		 $search=$this->Mhouse->getDataCustom("a.Id as id_detail,a.IdAddrType,a.IdCustHeader,a.Address,a.Postal,a.Telp1,a.Telp2,a.Fax,a.isDefault,a.Remarks,b.Id as id_type,b.Name as nm_type",
		 		 "trcust_dtladdress a",
				 "LEFT JOIN msaddr_type b ON a.IdAddrType=b.Id 
				  WHERE IdCustHeader='$myid'");
	 } else if($mydata=='business_type'){
		 $search=$this->Mhouse->getDataCustom("a.*,b.Description as nm_business_type,c.Name as nm_customer",
		 		 "trcust_dtlbusiness a",
				 "LEFT JOIN msbusiness_type b ON a.IdBusinessType=b.Id 
				  LEFT JOIN trcust_hdr c ON a.IdCustHeader=c.Id 
				  WHERE a.IdCustHeader='$myid'");
	 }else if($mydata=='commodity'){
		 $search=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		 		 "trcust_dtlcomm a",
				 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
				  LEFT JOIN msservice c ON b.IdService=c.Id 
				  WHERE a.IdCustHeader='$myid'");
	 }
	 
		 $data=array(
		 	'record'=>$search,
			'type'=>$this->Mhouse->getDataCustom("*","msaddr_type","ORDER BY Name"),
			
		 );
	$this->load->view('logistic/customer/'.$mydata,$data);
	 
}

public function getCountry(){
            
/*        $otpt= $this->session->userdata('otopt');
        $in="(";
        foreach($otpt as $row){ 
          $in .="'".$row."',"; 
        }  
        $in =substr($in,0,-1);  
        $in .= ")";
       */
        $kode = $this->input->post('q');
       

        $sql =$this->Mhouse->getDataCustom("*","mscountry a"," WHERE name like '%$kode%' ");
        $data = array();
       //$ii = 0;
        
        foreach($sql as $row)
        {   
 
            $data[] = array(
                        //'id'             => $ii,
                        'code'            => $row->Id,
                        'name'           => $row->name,
                        );
                        //$ii++;
        }
        echo json_encode($data);
	}
function getCity(){
        $kode = $this->input->post('q');
        $sql =$this->Mhouse->getDataCustom("*","mscity a"," WHERE name like '%$kode%' ");
        $data = array();      
        foreach($sql as $row)
        {   
            $data[] = array(
                        //'id'             => $ii,
                        'code'            => $row->Id,
                        'name'           => $row->Name,
                        );
        }
        echo json_encode($data);
}
	public function saveGeneral()
	{
	    $nmtabel='trcust_hdr';
        $key='Id';
		if(isset($_POST['ischecked'])){
			$ischecked='1';
		} else {
			$ischecked='0';
			}
		$data = array(
				'Name' => $this->input->post('Name'),
				'IdCity' => $this->input->post('cityfield'),
				'IdCountry' =>$this->input->post('countryfield'), 
				'VATNo' =>$this->input->post('vatno'), 
				'Email' =>$this->input->post('email'), 
				'YearEst' =>$this->input->post('yearst'),
				'CompanyInf' =>$this->input->post('companyinf'),
				'Website' =>$this->input->post('website'),
				'TotEmployee' =>$this->input->post('totalemployee'),
				'IdHolding' =>$this->input->post('IdHolding'),
				'isActive' =>$ischecked,
				'ActiveDate' =>$this->input->post('ActiveDate'),
				'Status' =>$this->input->post('status'),
				//'ModifiedBy'=>$this->session->userdata('idusr'),
				//'ModifiedDate'=>date('Y-m-d H:i:s'),
			);
		$this->Mhouse->update(array($key => $this->input->post('idgeneral')), $data,$nmtabel);
		echo json_encode(array("status" => TRUE));
	}
	
public function saveAddressType()
	{   
	    $nmtabel='trcust_dtladdress';
				if(isset($_POST['isdefault2'])){
			$ischecked='1';
		} else {
			$ischecked='0';
			}
		$data = array(
				'Id' => $this->input->post('idaddress2'),
				'IdCustHeader' => $this->input->post('idhead2'),
				'IdAddrType' => $this->input->post('type2'),
				'Address' => $this->input->post('address2'),
				'Postal' =>$this->input->post('postal2'), 
				'Telp1' =>$this->input->post('telp2'), 
				'Telp2' =>$this->input->post('telp4'), 
				'Fax' =>$this->input->post('fax2'),
				'isDefault' =>$ischecked,
				'Remarks' =>$this->input->post('remarks2'),
			);
		$insert = $this->Mhouse->save($data,$nmtabel);
		echo json_encode(array("status" => TRUE));
	}
function editAddress(){
	 $kode=$this->input->post('iddetail');
      $result=$this->Mhouse->getDataCustom("a.*,b.id as id_type,b.Name as nm_type","trcust_dtladdress a",
		  " LEFT JOIN msaddr_type b on a.IdAddrType=b.Id 
		    WHERE a.Id='$kode' Order by b.Name");
	foreach($result as $list){
		$row = array(
				'Id' =>$list->Id,
				'IdCustHeader' =>$list->IdCustHeader,
				'IdAddrType' =>$list->IdAddrType,
				'Address' =>$list->Address,
				'Postal' =>$list->Postal,
				'Telp1' =>$list->Telp1,
				'Telp2' =>$list->Telp2,
				'Fax' =>$list->Fax,
				'isDefault' =>$list->isDefault,
				'Remarks' =>$list->Remarks,
				'nm_type' =>$list->nm_type,
				'id_type' =>$list->id_type,
			);
			$data[] = $row;
		} 
		echo json_encode($data);
	}

public function UpdateEditAddress()
	{
	    $nmtabel='trcust_dtladdress';
        $key='Id';
		if(isset($_POST['isdefault1'])){
			$ischecked='1';
		} else {
			$ischecked='0';
			}
		$data = array(
				//'IdAddrType' => $this->input->post('idaddress1'),
				'Address' => $this->input->post('address1'),
				'Postal' =>$this->input->post('postal1'), 
				'Telp1' =>$this->input->post('telp1'), 
				'Telp2' =>$this->input->post('telp3'), 
				'Fax' =>$this->input->post('fax1'),
				'isDefault' =>$ischecked,
				'Remarks' =>$this->input->post('remarks1'),
						  
			);
		$this->Mhouse->update(array($key => $this->input->post('idaddress1')), $data,$nmtabel);
		echo json_encode(array("status" => TRUE));
	}
public function saveSalesDetail()
	{   
	    $nmtabel='trcust_dtlsales';
		$data = array(
				'Id' => $this->input->post('iddetailsales'),
				'IdCustHeader' => $this->input->post('idheadsales'),
				'IdService' =>$this->input->post('servisname'), 
				'IdSales' =>$this->input->post('salesname'), 
				'Remarks' =>$this->input->post('remarksales'),
			);
		$insert = $this->Mhouse->save($data,$nmtabel);
		echo json_encode(array("status" => TRUE));
	}
public function saveCommDetail()
	{   
	    $nmtabel='trcust_dtlcomm';
		$data = array(
				'Id' => $this->input->post('iddetailcommodity'),
				'IdCustHeader' => $this->input->post('idheadcomm'),
				'IdComm' =>$this->input->post('commodityname'),
				'Remarks' =>$this->input->post('remarkscommodity'),
			);
		$insert = $this->Mhouse->save($data,$nmtabel);
		echo json_encode(array("status" => TRUE));
	}
		
public function UpdateEditSales()
	{
	    $nmtabel='trcust_dtlsales';
        $key='Id';
/*		if(isset($_POST['isdefault1'])){
			$ischecked='1';
		} else {
			$ischecked='0';
			}*/
		$data = array(
				//'IdAddrType' => $this->input->post('idaddress1'),
				'IdCustHeader' => $this->input->post('idhead'),
				'IdService' =>$this->input->post('servisname2'), 
				'IdSales' =>$this->input->post('salesname2'), 
				'Remarks' =>$this->input->post('remarksales2'), 
						  
			);
		$this->Mhouse->update(array($key => $this->input->post('idSales1')), $data,$nmtabel);
		echo json_encode(array("status" => TRUE));
	}
public function UpdateDetailCommodity()
	{
	    $nmtabel='trcust_dtlcomm';
        $key='Id';
		$data = array(
				//'IdAddrType' => $this->input->post('idaddress1'),
				'IdCustHeader' => $this->input->post('idhead'),
				'IdComm' =>$this->input->post('commodityname2'),
				'Remarks' =>$this->input->post('remarkscommodity2'), 
						  
			);
		$this->Mhouse->update(array($key => $this->input->post('idCommodity1')), $data,$nmtabel);
		echo json_encode(array("status" => TRUE));
	}
public function deleteData()
	{
	   $id     = $this->input->post('id');
       $nmtabel= $this->input->post('nmtabel');
       $key    = $this->input->post('kolom');
       
		$this->Mhouse->delete_by_id($id,$nmtabel,$key);
		echo json_encode(array("status" => TRUE));
	}
function editDetailSales(){
	 $kode=$this->input->post('id_detail');
      $result=$this->Mhouse->getDataCustom("a.*,b.Id as id_service,b.Name as nm_sevice","trcust_dtlsales a",
		  "LEFT JOIN msservice b ON a.IdService=b.Id
				   WHERE a.Id='$kode'");
	foreach($result as $list){
		$row = array(
				'Id' =>$list->Id,
				'IdCustHeader' =>$list->IdCustHeader,
				'id_service' =>$list->id_service,
				'IdSales' =>$list->IdSales,
				'Remarks' =>$list->Remarks,
				'nm_sevice' =>$list->nm_sevice,
			);
			$data[] = $row;
		} 
		echo json_encode($data);
	}
function editDetailCommodity(){
	 $kode=$this->input->post('id_detail');
      $result=$this->Mhouse->getDataCustom("a.*,b.Desc as nm_commodity,c.Name as nm_service",
		 		 "trcust_dtlcomm a",
				 "LEFT JOIN mscommodity b ON a.IdComm=b.Id 
				  LEFT JOIN msservice c ON b.IdService=c.Id 
				  WHERE a.Id='$kode'");
	foreach($result as $list){
		$row = array(
				'Id' =>$list->Id,
				'IdCustHeader' =>$list->IdCustHeader,
				'nm_commodity' =>$list->nm_commodity,
				'nm_service' =>$list->nm_service,
				'Remarks' =>$list->Remarks,
			);
			$data[] = $row;
		} 
		echo json_encode($data);
	}
function load_combo_service(){
	 
      $result=$this->Mhouse->getDataCustom("a.*,b.Name as nm_kategori","msservice a",
		  "LEFT JOIN msservice_category b ON a.IdServiceCategory=b.Id");
	foreach($result as $list){
		$row = array(
				'Id' =>$list->Id,
				'Name' =>$list->Name,
				'nm_kategory' =>$list->nm_kategori,
			);
			$data[] = $row;
		} 
		echo json_encode($data);
}
function load_combo_commodity(){
	 
      $result=$this->Mhouse->getDataCustom("a.*,b.Name as nm_service","mscommodity a",
		  "LEFT JOIN msservice b ON a.IdService=b.Id");
	foreach($result as $list){
		$row = array(
				'Id' =>$list->Id,
				'Name' =>$list->Desc,
				'nm_service' =>$list->nm_service,
			);
			$data[] = $row;
		} 
		echo json_encode($data);
}
	
	
	
	

}


