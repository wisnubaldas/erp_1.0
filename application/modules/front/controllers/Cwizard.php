<?php
class Cwizard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Mdata');
        //$this->db= $this->load->database('trias_front', TRUE);
    }	
    
    function autonumb($nmtabel='',$key='',$noawal=''){
        $length = strlen($noawal);
        $query=$this->db->query("SELECT MAX(RIGHT($key,3)) AS nou FROM $nmtabel WHERE LEFT($key,$length)='$noawal' ORDER BY $key");
        $nobaru1='';
        if($query->num_rows() > 0){
            foreach($query->result() as $t){
                $tmp=((int)$t->nou)+1;
                $nobaru1=sprintf("%03s",$tmp);
            }
        }else{
            $nobaru1="001";
        }
        $nobaru=$noawal.$nobaru1;
        return $nobaru; 
    }
    
    public function cmbCountry()
	{
		$nm_tabel='mscountry';
        $nm_coloum= array('Id','name');
        $orderby= array('name' => 'asc');
        $where=  array();
        $list = $this->Mdata->get_datadetail($nm_tabel,$nm_coloum,$orderby,$where);
        
		$data = array();
		$no = 0;
		foreach ($list as $rec){
			$no++;
			$row = array(
            'id' => $rec->Id,
            'name' => $rec->name,
            'isi' => ''
            );
			$data[] = $row;
		}
		$output = array(
						"data" => $data,
				);
		//output to json format
		echo json_encode($data);
	}
    
    public function cmbCity()
	{
	    $id=$this->uri->segment(4);
		$nm_tabel='mscity';
        $nm_coloum= array('Id','Name');
        $orderby= array('Name' => 'asc');
        $where=  array('IdCou'=>$id);
        $list = $this->Mdata->get_datadetail($nm_tabel,$nm_coloum,$orderby,$where);
        
		$data = array();
		$no = 0;
		foreach ($list as $rec){
			$no++;
			$row = array(
            'id' => $rec->Id,
            'name' => $rec->Name,
            'isi' => ''
            );
			$data[] = $row;
		}
		$output = array(
						"data" => $data,
				);
		//output to json format
		echo json_encode($data);
	}
    
    public function cmbCom()
	{
		$nm_tabel='mscommodity';
        $nm_coloum= array('Id','Desc');
        $orderby= array('Id' => 'desc');
        $where=  array();
        $list = $this->Mdata->get_datadetail($nm_tabel,$nm_coloum,$orderby,$where);
        
		$data = array();
		$no = 0;
		foreach ($list as $rec){
			$no++;
			$row = array(
            'id' => $rec->Id,
            'name' => $rec->Desc,
            'isi' => ''
            );
			$data[] = $row;
		}
		$output = array(
						"data" => $data,
				);
		//output to json format
		echo json_encode($data);
	}
    
    public function mos()
	{
	   // $id=$this->uri->segment(4);
		$nm_tabel='msservice';
        $nm_coloum= array('Id','Name');
        $orderby= array('Id' => 'desc');
        $where=  array('IdServiceCategory'=>'003');
        $list = $this->Mdata->get_datadetail($nm_tabel,$nm_coloum,$orderby,$where);
        
		$data = array();
		$no = 0;
		foreach ($list as $rec){
			$no++;
			$row = array(
            'id' => $rec->Id,
            'name' => $rec->Name,
            'isi' => ''
            );
			$data[] = $row;
		}
		$output = array(
						"data" => $data,
				);
		//output to json format
		echo json_encode($data);
	}
    
    public function capcha(){
        $options=array(
		'img_path'=>'./asset/captcha_img/',
		'img_url'=>base_url('asset/captcha_img/'),
	        'font_path'     => './asset/captcha_img/Soft_Marshmallow.otf',
			'img_width'     => '170',
			'img_height'    => 48,
			'expiration'    => 7200,
			'word_length'   => 4,
			'font_size'     => 30
		);
		$cap=create_captcha($options);
		$image=$cap['image'];
		$this->session->set_userdata('cap',$cap['word']);
        
        echo json_encode(array('imgcap'=>$image,'imgtxt'=>$cap['word']));
        
    }
    
    public function cek_capcha(){
        $captcha = $this->input->post('tcapcha');
        
        if($captcha==$this->session->userdata('cap')){
            echo '1';
        }else{
            echo '0';
        }
    }
    
    public function lihat(){
        echo $this->session->userdata('cap').'='.$this->session->userdata('codverification');
    }
    
    public function crver(){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 5; $i++) {
            $randstring .= $characters[rand(0, strlen($characters))];
        }
        $this->session->set_userdata('codverification',$randstring);
        
        //KIRIM EMAIL
        echo json_encode(array('qwaszx'=>$randstring));
    }
    public function crverxxx(){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 20; $i++) {
            $randstring .= $characters[rand(0, strlen($characters))];
        }
        $this->session->set_userdata('codverification',$randstring);
    }
    public function svinquery(){
        $tgl= date('Y-m-d');
        $extgl=explode("-",$tgl);
        $noawal=$extgl[0].$extgl[1].$extgl[2].'CUST';
        $nocust=$this->autonumb('trcust_hdr','id',$noawal);
        
	    $nmtabel='trcust_hdr';
		$data = array(
				'Id'     => $nocust,
				'NAME'   => $this->input->post('company'),
                'Email'  => $this->input->post('email'),
                'STATUS' => '0'
			);
		$insert1 = $this->Mdata->save($data,$nmtabel);
        
        
        $tgl= date('Y-m-d');
        $extgl=explode("-",$tgl);
        $noawal=$extgl[0].$extgl[1].$extgl[2].'INQUERY';
        $noinquery=$this->autonumb('trcust_inquiry','id',$noawal);
               
        $inquery='trcust_inquiry';
		$data_inquery = array(
				'Id'                => $noinquery,
				'IdCustHeader'      => $nocust,
                'IdCouOri'          => $this->input->post('origin_country'),
                'IdCityOri'         => $this->input->post('origin_city'),
                //'IdPortOri'         => $this->input->post('email'),
                'IdCouDest'         => $this->input->post('destination_country'),
                'IdCityDest'        => $this->input->post('destination_city'),
                //'IdPortDest'        => $this->input->post('email'),
                'AddressOri'        => $this->input->post('origin_address'),
                'ZipcodeOri'        => $this->input->post('origin_zip'),
                'AddressDest'       => $this->input->post('destination_address'),
                'ZipcodeDest'       => $this->input->post('destination_zip'),
                'IdService'         => $this->input->post('mos'),
                'LoadingType'       => $this->input->post('loading_type'),
                'Incoterm'          => $this->input->post('incoterm'),
                'TypeService'       => $this->input->post('tos'),
                'OtherReq'          => $this->input->post('other'),
                'DateOfAvailable'   => $this->input->post('doa'),
                'IdCommodity'       => $this->input->post('commodity'),
                'DescGoods'         => $this->input->post('dog'),
                'Qty'               => $this->input->post('qty'),
                'Unit'              => $this->input->post('unit'),
                'Weight'            => $this->input->post('w'),
                'LENGTH'            => $this->input->post('p'),
                'Width'             => $this->input->post('l'),
                'Height'            => $this->input->post('t'),
                'Volume'            =>  $this->input->post('p')*$this->input->post('l')*$this->input->post('t'),
               // 'FileUpload1'       => $this->input->post('email'),
                'AdditionalInf'     => $this->input->post('addinf'),
			);
        $insert2 = $this->Mdata->save($data_inquery,$inquery);
        
        
        $nocontact=$this->autonumb('trcust_dtlcontact','id',$nocust);
        $contact='trcust_dtlcontact';
		$data_contact = array(
				'Id'                => $nocontact,
				'IdCustHeader'      => $nocust,
                'NAME'          => $this->input->post('pic'),
                //'POSITION'         => $this->input->post('origin_city'),
                'Email'         => $this->input->post('email'),
                'Telp1'        => $this->input->post('phone'),
                'Telp2'        => $this->input->post('mphone'),
                //'Fax'        => $this->input->post('origin_zip'),
                //'Birthday'       => $this->input->post('destination_address'),
               // 'Remarks'       => $this->input->post('destination_zip'),
                'isDefault'         => '1',
			);
        $insert3 = $this->Mdata->save($data_contact,$contact);
        
        $noaddress=$this->autonumb('trcust_dtladdress','id',$nocust);
        $address='trcust_dtladdress';
		$data_address = array(
				'Id'                => $noaddress,
				'IdCustHeader'      => $nocust,
                //'IdAddrType'        => $this->input->post('pic'),
                //'POSITION'         => $this->input->post('origin_city'),
                'Address'           => $this->input->post('address'),
                'Telp1'             => $this->input->post('phone'),
                'Telp2'             => $this->input->post('mphone'),
                //'Fax'        => $this->input->post('origin_zip'),
                //'Birthday'       => $this->input->post('destination_address'),
               // 'Remarks'       => $this->input->post('destination_zip'),
                'isDefault'         => '1',
			);
        $insert4 = $this->Mdata->save($data_address,$address);
		echo json_encode(array("status" => TRUE));
    }
}