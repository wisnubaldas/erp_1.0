<?php
class Preshipment extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
		$this->load->model('logistic/Model_inquiry');
    }	
	
    function index(){
       	  $data=array(
		  'title'=>'menu quotation',
		  'modulname'=>'CRM for Forwarder',
		  'scrumb'=>'<a href="'.base_url().'logistic/quotation" class="breadcrumb">quotation</a> quotation List',
		  'sidemenu'=>'<a href="'.base_url().'">quotation</a>',
		  'view2'=>'logistic/menu_forwarder',
		  'view'=>'logistic/preshipment/list_preshipment'
		  );
	      $this->load->view('template/home',$data);
		  
	}

 function customer_detail(){
	 $idcust=$this->uri->segment(4);
       	  $data=array(
		  'title'=>'dashboard Customers',
		  'idcust'=>$this->Model_inquiry->getDataCustom("a.Id as id_header,a.Name as companyname,b.Name as city,c.Name as country,a.Status,a.TotEmployee,a.Email,a.Website,a.isActive",
		  			"trcust_hdr a",
		  			"LEFT JOIN mscity b ON a.IdCity=b.Id
					 LEFT JOIN mscountry c ON a.IdCountry=c.Id
					 WHERE a.Id='$idcust' LIMIT 1"),
		  'Prospect'=>$this->Model_inquiry->count_record("trcust_hdr","WHERE Status='Prospect'"),
		  'sidemenu'=>'<a href="'.base_url().'">customer_detail</a>',
		  'record'=>$this->Model_inquiry->getDataCustom("*","trcust_hdr"," WHERE Id='$idcust'"),
		  'view'=>'customer/customer_detail'
		  );
	      $this->load->view('template/home',$data);
	 
}

 function preshipment_detail(){
	 $idcust=$this->uri->segment(4);
       	  $data=array(
		  'title'=>'Inquery Details ',
		  'modulname'=>'CRM for Forwarder',
		  'scrumb'=>'<a href="'.base_url().'logistic/quotation" class="breadcrumb">quotation</a> quotation Detail',
		  'idcust'=>$this->Model_inquiry->getDataCustom("a.Id as id_header,a.Name as companyname,b.Name as city,c.Name as country,a.Status,a.TotEmployee,a.Email,a.Website,a.isActive",
		  			"trcust_hdr a",
		  			"LEFT JOIN mscity b ON a.IdCity=b.Id
					 LEFT JOIN mscountry c ON a.IdCountry=c.Id
					 WHERE a.Id='$idcust' LIMIT 1"),
		  'Prospect'=>$this->Model_inquiry->count_record("trcust_hdr","WHERE Status='Prospect'"),
		  'sidemenu'=>'<a href="'.base_url().'">customer_detail</a>',
		  'record'=>$this->Model_inquiry->getDataCustom("*","trcust_hdr"," WHERE Id='$idcust'"),
		  'view2'=>'logistic/menu_forwarder',
		  'view'=>'Preshipment/detail_preshipment'
		  );
	      $this->load->view('template/home',$data);
	 
}
 function manage_preshipment(){
	 $idcust=$this->uri->segment(4);
       	  $data=array(
		  'title'=>'Inquery Details ',
		  'modulname'=>'CRM for Forwarder',
		  'scrumb'=>'<a href="'.base_url().'logistic/quotation" class="breadcrumb">quotation</a> quotation Detail',
		  'idcust'=>$this->Model_inquiry->getDataCustom("a.Id as id_header,a.Name as companyname,b.Name as city,c.Name as country,a.Status,a.TotEmployee,a.Email,a.Website,a.isActive",
		  			"trcust_hdr a",
		  			"LEFT JOIN mscity b ON a.IdCity=b.Id
					 LEFT JOIN mscountry c ON a.IdCountry=c.Id
					 WHERE a.Id='$idcust' LIMIT 1"),
		  'Prospect'=>$this->Model_inquiry->count_record("trcust_hdr","WHERE Status='Prospect'"),
		  'sidemenu'=>'<a href="'.base_url().'">customer_detail</a>',
		  'record'=>$this->Model_inquiry->getDataCustom("*","trcust_hdr"," WHERE Id='$idcust'"),
		  'view2'=>'logistic/menu_forwarder',
		  'view'=>'quotation/manage_quotation'
		  );
	      $this->load->view('template/home',$data);
	 
}
 function create_preshipment(){
	 $idcust=$this->uri->segment(4);
       	  $data=array(
		  'title'=>'Inquery Details ',
		  'modulname'=>'CRM for Forwarder',
		  'scrumb'=>'<a href="'.base_url().'logistic/quotation" class="breadcrumb">quotation</a> quotation Detail',
		  'idcust'=>$this->Model_inquiry->getDataCustom("a.Id as id_header,a.Name as companyname,b.Name as city,c.Name as country,a.Status,a.TotEmployee,a.Email,a.Website,a.isActive",
		  			"trcust_hdr a",
		  			"LEFT JOIN mscity b ON a.IdCity=b.Id
					 LEFT JOIN mscountry c ON a.IdCountry=c.Id
					 WHERE a.Id='$idcust' LIMIT 1"),
		  'Prospect'=>$this->Model_inquiry->count_record("trcust_hdr","WHERE Status='Prospect'"),
		  'sidemenu'=>'<a href="'.base_url().'">customer_detail</a>',
		  'record'=>$this->Model_inquiry->getDataCustom("*","trcust_hdr"," WHERE Id='$idcust'"),
		  'view2'=>'logistic/menu_forwarder',
		  'view'=>'quotation/create_quotation'
		  );
	      $this->load->view('template/home',$data);
	 
}
 function list_preshipment()
	{
		$idsession=$this->session->userdata('idusr');
		$nm_tabel='trcust_inquiry a';
		$nm_tabel2='trcust_hdr b';
		$kolom1='a.IdCustHeader';
		$kolom2='b.Id';
		
		$selected='a.*,b.Id as id_customer,b.Name as nm_customer,c.name as ori_country,d.Name as ori_city,e.Name as ori_port,f.name as dest_country,g.Name as dest_city,h.Name as dest_port,i.Name as nm_service,j.Desc as nm_commodity,l.Name as nm_ms_stage';
        $nm_coloum= array('a.nm_customer,b.Name','c.Name','a.AddressOri','i.Name','a.Incoterm','a.DateOfAvailable','a.AddressDest','a.LoadingType');
        $orderby= array('a.CreatedDate' => 'DESC');
		$where=  array();
        $list = $this->Model_inquiry->get_datatables2($selected,$nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2);
        
		$data = array();
		$no = $_POST['start'];
		
		foreach ($list as $datalist){
			$no++;
			$row = array(
            'no' => $no,
            'id_header' =>$datalist->Id,
			'id_customer' =>$datalist->id_customer,
            'nm_customer' =>'<a href="'.base_url().'logistic/quotation/detail_quotation/'.$datalist->Id.'">'.$datalist->nm_customer.'</a>',
			'ori_country' =>$datalist->ori_country,
			'ori_city' =>$datalist->ori_city,
			'ori_port' =>$datalist->ori_port,
			'dest_country' =>$datalist->dest_country,
			'dest_city' =>$datalist->dest_city,
			'dest_port' =>$datalist->dest_port,
			'nm_service' =>$datalist->nm_service,
			'nm_commodity' =>$datalist->nm_commodity,
			'nm_service' =>$datalist->nm_service,
			'AddressDest' =>$datalist->AddressDest,
			'Incoterm' =>$datalist->Incoterm,
			'LoadingType' =>$datalist->LoadingType,
			'nm_commodity' =>$datalist->nm_commodity,
			'DateOfAvailable' =>$datalist->DateOfAvailable,
			'nm_ms_stage' =>$datalist->nm_ms_stage,
			
			
			'Status' =>$datalist->CreatedDate=='Prospect'?'<span class="uk-badge uk-badge-warning">'.$datalist->CreatedDate.'</span>':'<span class="uk-badge uk-badge-primary">'.$datalist->CreatedDate.'</span>',
			'Incoterm' =>'<span class="uk-badge uk-badge-notification md-bg-brown-800 uk-text-contrast">'.$datalist->Incoterm.'</span>',
			'LoadingTypee' =>$datalist->LoadingType=='1'?'<span class="uk-badge uk-badge-success">YES</span>':'<span class="uk-badge uk-badge-danger">NO</span>',
			'action' =>'<div class="uk-button-dropdown" data-uk-dropdown>
                                <button class="md-btn"><i class="material-icons">settings</i> <i class="material-icons">&#xE313;</i></button>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav uk-nav-dropdown">
                                        <li><a href="'.site_url('logistic/quotation/manage_quotation').'"><i class="material-icons">description</i>Manage Quotation</a></li>
                                        <li><a href="#"><i class="material-icons">settings</i>Another Action</a></li>
                                    </ul>
                                </div>
                            </div>',

            );
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Model_inquiry->count_all2($nm_tabel,$nm_coloum,$nm_tabel2,$kolom1,$kolom2),
						"recordsFiltered" => $this->Model_inquiry->count_filtered2($nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
}

function status_quotation()
	{
		$idsession=$this->session->userdata('idusr');
		$nm_tabel='trcust_inquiry a';
		$nm_tabel2='trcust_hdr b';
		$kolom1='a.IdCustHeader';
		$kolom2='b.Id';
		
		$status=$this->uri->segment(4);
		
		$selected='a.*,b.Id as id_customer,b.Name as nm_customer,c.name as ori_country,d.Name as ori_city,e.Name as ori_port,f.name as dest_country,g.Name as dest_city,h.Name as dest_port,i.Name as nm_service,j.Desc as nm_commodity,l.Name as nm_ms_stage';
        $nm_coloum= array('a.nm_customer,b.Name','c.Name','a.AddressOri','i.Name','a.Incoterm','a.DateOfAvailable','a.AddressDest','a.LoadingType');
        $orderby= array('a.CreatedDate' => 'DESC');
		$where=  array();
        $list = $this->Model_inquiry->get_datatables2($selected,$nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2);
        
		$data = array();
		$no = $_POST['start'];
		
		foreach ($list as $datalist){
			$no++;
			$row = array(
            'no' => $no,
            'id_header' =>$datalist->Id,
			'id_customer' =>$datalist->id_customer,
            'nm_customer' =>'<a href="'.base_url().'logistic/quotation/detail_quotation/'.$datalist->Id.'">'.$datalist->nm_customer.'</a>',
			'ori_country' =>$datalist->ori_country,
			'ori_city' =>$datalist->ori_city,
			'ori_port' =>$datalist->ori_port,
			'dest_country' =>$datalist->dest_country,
			'dest_city' =>$datalist->dest_city,
			'dest_port' =>$datalist->dest_port,
			'nm_service' =>$datalist->nm_service,
			'nm_commodity' =>$datalist->nm_commodity,
			'nm_service' =>$datalist->nm_service,
			'AddressDest' =>$datalist->AddressDest,
			'Incoterm' =>$datalist->Incoterm,
			'LoadingType' =>$datalist->LoadingType,
			'nm_commodity' =>$datalist->nm_commodity,
			'DateOfAvailable' =>$datalist->DateOfAvailable,
			'nm_ms_stage' =>$datalist->nm_ms_stage,
			
			
			'Status' =>$datalist->CreatedDate=='Prospect'?'<span class="uk-badge uk-badge-warning">'.$datalist->CreatedDate.'</span>':'<span class="uk-badge uk-badge-primary">'.$datalist->CreatedDate.'</span>',
			'Incoterm' =>'<span class="uk-badge uk-badge-notification md-bg-brown-800 uk-text-contrast">'.$datalist->Incoterm.'</span>',
			'LoadingTypee' =>$datalist->LoadingType=='1'?'<span class="uk-badge uk-badge-success">YES</span>':'<span class="uk-badge uk-badge-danger">NO</span>',
			//'ETD' =>date('d-m-Y',strtotime($datalist->ETD)),

            );
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Model_inquiry->count_all2($nm_tabel,$nm_coloum,$nm_tabel2,$kolom1,$kolom2),
						"recordsFiltered" => $this->Model_inquiry->count_filtered2($nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
}

public function filterclosedsmu()
	{
		$inputan=$this->uri->segment(3);
		$pecah=explode("_", $inputan);
		$date1=$pecah[0];
		$date2=$pecah[1];
		$kategori=$pecah[2];
		$kriteria=$pecah[3];
		$txtsearch=$pecah[4];
		
		if($kriteria=='startwith'){
		$kondisi=array($kategori.' LIKE'=>$txtsearch.'%','a.ETD <= '=>$date2,'a.ETD >='=>$date1,'a.StatusProses = '=>'5');	
		} else if($kriteria=='endwith'){
		$kondisi=array($kategori.' LIKE'=>'%'.$txtsearch,'a.ETD <= '=>$date2,'a.ETD >='=>$date1,'a.StatusProses = '=>'5');	
		} else if($kriteria=='contains'){
		$kondisi=array($kategori.' LIKE'=>'%'.$txtsearch.'%','a.ETD <= '=>$date2,'a.ETD >='=>$date1,'a.StatusProses = '=>'5');	
		} else if($kriteria=='notcontains'){
		$kondisi=array($kategori.' NOT LIKE'=>'%'.$txtsearch.'%','a.ETD <= '=>$date2,'a.ETD >='=>$date1,'a.StatusProses = '=>'5');	
		} else if($kriteria=='equals'){
		$kondisi=array($kategori =>$txtsearch,'a.ETD <= '=>$date2,'a.ETD >='=>$date1,'a.StatusProses = '=>'5');	
		} else if($kriteria=='notequals'){
		$kondisi=array($kategori.' <> ' =>$txtsearch,'a.ETD <= '=>$date2,'a.ETD >='=>$date1,'a.StatusProses = '=>'5');	
		}
		
		$nm_tabel='outgoing_master a';
		$nm_tabel2='ms_customer b';
		$kolom1='a.Shipper';
		$kolom2='b.CustCode';
		
       $nm_coloum= array('a.NoSMU','a.NoSMU','a.ETD','b.CustName','c.CustName','d.PortName','e.PortName','a.PCS','a.CWT','a.FinalCWT');
        $orderby= array('a.NoSMU' => 'desc');
        //$where=  array('a.StatusProses = '=>'5');
        $where=  $kondisi;
        $list = $this->m_master_outgoing->get_datatables3($nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2);
        
		$data = array();
		$no = $_POST['start'];
		
		foreach ($list as $datalist){
			$no++;
			$row = array(
            'no' => $no,
            'NoSMU' => '<a href="#" onclick="detailsmuclosed(this);">'. $datalist->NoSMU.'</a>',
            'ori' =>$datalist->ori,
			'desti' =>$datalist->desti,
			'Service' =>$datalist->Service,
			'sender' =>$datalist->sender,
			'receiver' =>$datalist->receiver,
			'cwt' =>$datalist->CWT,
			'pcs' =>$datalist->PCS,
			'FinalCWT' =>'<div class="text-left">'.$status=($datalist->FinalCWT > $datalist->CWT)?"<label class='badge badge-important white'>".$datalist->FinalCWT."</label>":"<label class='badge badge-success white'>".$datalist->FinalCWT."</label>".'</div>',
			'ETD' =>date('d-m-Y',strtotime($datalist->ETD)),
            'action'=> '<div class="form-inline">
<a style="display:none" class="green" href="javascript:void()" title="Edit" onclick="ajax_edit('."'".$datalist->NoSMU."'".')"><i class="icon-pencil bigger-150"></i></a>
			</div>
			'
			
            );
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_master_outgoing->count_all3($nm_tabel,$nm_coloum,$nm_tabel2,$kolom1,$kolom2),
						"recordsFiltered" => $this->m_master_outgoing->count_filtered3($nm_tabel,$nm_coloum,$orderby,$where,$nm_tabel2,$kolom1,$kolom2),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
}

function editDetailSales(){
	 $kode=$this->input->post('id_detail');
      $result=$this->Model_inquiry->getDataCustom("a.*,b.Id as id_service,b.Name as nm_sevice","trcust_dtlsales a",
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

}


