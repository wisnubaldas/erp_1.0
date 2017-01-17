<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdata extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->db= $this->load->database('trias_front', TRUE);
	}
    
    function hitungdate($lahir) {

        $pecah = explode("-", $lahir);
        
        $tgl = intval($pecah['2']);
        $bln = intval($pecah['1']);
        $thn = $pecah['0'];
        $utahun = date("Y") - $thn;
        $ubulan = date("m") - $bln;
        $uhari = date("j") - $tgl;
        if($uhari < 0){
        $uhari = date("t",mktime(0,0,0,$bln-1,date("m"),date("Y"))) - abs($uhari); $ubulan = $ubulan - 1;
        }
        if($ubulan < 0){
        $ubulan = 12 - abs($ubulan); $utahun = $utahun - 1;
        }
        //$usia = $utahun.' Tahun '.$ubulan.' Bulan '.$uhari.' Hari';
        //return $usia;
        return $utahun;  
    }
    
    function cekdatalogin(){
        
       // if(time() - $this->session->userdata('timestamp') > 300) {
//           // echo"<script>alert('5 Minutes over!');</script>";
//            $this->Login_model->logout();
//		    redirect('/page/login');
//            exit;
//        } else {
//            $this->session->set_userdata('timestamp',time());//;$_SESSION['timestamp'] = time(); 
//        }
//         
    }
    
    function  tanggal_format_indonesia($tgl){
        $tanggal  = explode('-',$tgl); 
        $bulan  = $this-> getBulan($tanggal[1]);
        $tahun  =  $tanggal[0];
        return  $tanggal[2].' '.$bulan.' '.$tahun;

        }
         
    function  tanggal_indonesia($tgl){
        $tanggal  =  substr($tgl,8,2);
        $bulan  = substr($tgl,5,2);
        $tahun  =  substr($tgl,0,4);
        return  $tanggal.'-'.$bulan.'-'.$tahun;
        }
    
    function bulan(){
        $bln = array('jan','feb','mar','apr','mey','jun','jul','agus','sep','oct','nov','des');
        return $bln;
    }
           
    function  getBulan($bln){
        switch  ($bln){
        case  1:
        return  "Januari";
        break;
        case  2:
        return  "Februari";
        break;
        case  3:
        return  "Maret";
        break;
        case  4:
        return  "April";
        break;
        case  5:
        return  "Mei";
        break;
        case  6:
        return  "Juni";
        break;
        case  7:
        return  "Juli";
        break;
        case  8:
        return  "Agustus";
        break;
        case  9:
        return  "September";
        break;
        case  10:
        return  "Oktober";
        break;
        case  11:
        return  "November";
        break;
        case  12:
        return  "Desember";
        break;
     }
    }

	private function _get_datatables_query($nm_tabel,$nm_coloum,$orderby,$where)
	{	
		$i = 0;
		foreach ($nm_coloum as $item) 
		{
			if($_POST['search']['value'])
				($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
			$column[$i] = $item;
			$i++;
		}
		
		if(isset($_POST['order']))
		{
		  $n=0;
            $sort=$_POST['order'];
            foreach($sort as $i =>$val){
             $this->db->order_by($column[$_POST['order'][$n]['column']], $_POST['order'][$n]['dir']);   
             $n++;
            }
		}
		else if(isset($orderby))
		{
			$order = $orderby;
			$this->db->order_by(key($order), $order[key($order)]);
		}
        $this->db->where($where); 
        

	}

	function get_datatables($nm_tabel,$nm_coloum,$orderby,$where)
	{
	    $this->db->from($nm_tabel);
        
		$this->_get_datatables_query($nm_tabel,$nm_coloum,$orderby,$where);
        if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}
    
	function count_filtered($nm_tabel,$nm_coloum,$orderby,$where)
	{
		$this->_get_datatables_query($nm_tabel,$nm_coloum,$orderby,$where);
        $this->db->from($nm_tabel);
		return $this->db->count_all_results();
	}

	public function count_all($nm_tabel,$nm_coloum)
	{
		$this->db->from($nm_tabel);
		return $this->db->count_all_results();
	}
    
    public function get($nmtabel)
	{
		$this->db->from($nmtabel);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_by_id($id,$nmtabel,$key)
	{
		$this->db->from($nmtabel);
		$this->db->where($key,$id);
		$query = $this->db->get();
		return $query->row();
	}
    public function get_by_id_join($id,$nmtabel,$nmtabel1,$on1,$key)
	{
		$this->db->from($nmtabel);
        $this->db->join($nmtabel1, $on1,'inner');//join
		$this->db->where($key,$id);
		$query = $this->db->get();
		return $query->row();
	}
    public function get_by_id_join1($id,$nmtabel,$nmtabel1,$on1,$nmtabel2,$on2,$key)
	{
		$this->db->from($nmtabel);
        $this->db->join($nmtabel1, $on1,'inner');//join
        $this->db->join($nmtabel2, $on2,'inner');//join
		$this->db->where($key,$id);
		$query = $this->db->get();
		return $query->row();
	}
    
    public function get_by_id_join2($id,$nmtabel,$nmtabel1,$on1,$nmtabel2,$on2,$nmtabel3,$xon3,$key)
	{
		$this->db->from($nmtabel);
        $this->db->join($nmtabel1, $on1,'inner');//join
        $this->db->join($nmtabel2, $on2,'inner');//join
        $this->db->join($nmtabel3, $xon3,'inner');//join
		$this->db->where($key,$id);
		$query = $this->db->get();
		return $query->row();
	}
    
    public function get_by_id_join3($id,$nmtabel,$nmtabel1,$on1,$nmtabel2,$on2,$nmtabel3,$xon3,$nmtabel4,$on4,$key)
	{
		$this->db->from($nmtabel);
        $this->db->join($nmtabel1, $on1,'inner');//join
        $this->db->join($nmtabel2, $on2,'inner');//join
        $this->db->join($nmtabel3, $xon3,'inner');//join
		$this->db->join($nmtabel4, $on4,'inner');//join
        $this->db->where($key,$id);
		$query = $this->db->get();
		return $query->row();
	}
    
    public function get_by_id_join4($id,$nmtabel,$nmtabel1,$on1,$nmtabel2,$on2,$nmtabel3,$xon3,$nmtabel4,$on4,$nmtabel5,$on5,$key)
	{
		$this->db->from($nmtabel);
        $this->db->join($nmtabel1, $on1,'inner');//join
        $this->db->join($nmtabel2, $on2,'inner');//join
        $this->db->join($nmtabel3, $xon3,'inner');//join
		$this->db->join($nmtabel4, $on4,'inner');//join
        $this->db->join($nmtabel5, $on5,'inner');//join
        $this->db->where($key,$id);
		$query = $this->db->get();
		return $query->row();
	}

	public function save($data,$nmtabel)
	{
		$this->db->insert($nmtabel, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data, $nmtabel)
	{
		$this->db->update($nmtabel, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id,$nmtabel,$key)
	{
		$this->db->where($key, $id);
		$this->db->delete($nmtabel);
	}
    
    private function _get_datadetail_query($nm_tabel,$nm_coloum,$orderby,$where)
	{	
		$i = 0;
		
		if(isset($_POST['order']))
		{
			$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else if(isset($orderby))
		{
			$order = $orderby;
			$this->db->order_by(key($order), $order[key($order)]);
		}
        $this->db->where($where); 
        

	}
    
    public function get_datadetail($nm_tabel,$nm_coloum,$orderby,$where,$in='')
	{
	    $this->db->from($nm_tabel);
		$this->_get_datadetail_query($nm_tabel,$nm_coloum,$orderby,$where);
        
        if($in != ''){
            $otopt=$this->session->userdata('otopt');
            $this->db->where_in($in,$otopt);
        }
        
		$query = $this->db->get();
		return $query->result();
	}
    
//==================== JOIN TABEL 2 ====================///   
    function get_datatables_join1($nm_tabel,$nm_coloum,$nm_tabel1,$on1,$orderby,$where)
	{
	    $this->db->from($nm_tabel);
        $this->db->join($nm_tabel1, $on1,'inner');//join
		$this->_get_datatables_query($nm_tabel,$nm_coloum,$orderby,$where);
        if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}
    
    function count_filtered_join1($nm_tabel,$nm_coloum,$nm_tabel1,$on1,$orderby,$where)
	{
		$this->_get_datatables_query($nm_tabel,$nm_coloum,$orderby,$where);
        $this->db->from($nm_tabel);
        $this->db->join($nm_tabel1, $on1,'inner');//join
		return $this->db->count_all_results();
	}

	public function count_all_join1($nm_tabel,$nm_coloum,$nm_tabel1,$on1)
	{
		$this->db->from($nm_tabel);
        $this->db->join($nm_tabel1, $on1,'inner');//join
		return $this->db->count_all_results();
	}
    
//============================ JOIN TABEL 3 ========================== //    
    function get_datatables_join2($nm_tabel,$nm_coloum,$nm_tabel1,$on1,$nm_tabel2,$on2,$orderby,$where)
	{
	    $this->db->from($nm_tabel);
        $this->db->join($nm_tabel1, $on1,'inner');//join
        $this->db->join($nm_tabel2, $on2,'inner');//join
		$this->_get_datatables_query($nm_tabel,$nm_coloum,$orderby,$where);
        if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}
 
    function count_filtered_join2($nm_tabel,$nm_coloum,$nm_tabel1,$on1,$nm_tabel2,$on2,$orderby,$where)
	{
		$this->_get_datatables_query($nm_tabel,$nm_coloum,$orderby,$where);
        $this->db->from($nm_tabel);
        $this->db->join($nm_tabel1, $on1,'inner');//join
        $this->db->join($nm_tabel2, $on2,'inner');//join
		return $this->db->count_all_results();
	}

	public function count_all_join2($nm_tabel,$nm_coloum,$nm_tabel1,$on1,$nm_tabel2,$on2)
	{
		$this->db->from($nm_tabel);
        $this->db->join($nm_tabel1, $on1,'inner');//join
        $this->db->join($nm_tabel2, $on2,'inner');//join
		return $this->db->count_all_results();
	}
    
    
 //============================ JOIN TABEL 4 ========================== //   
    function get_datatables_join3($nm_tabel,$nm_coloum,$nm_tabel1,$on1,$nm_tabel2,$on2,$nm_tabel3,$on3,$orderby,$where,$in='')
	{
	    $this->db->from($nm_tabel);
        $this->db->join($nm_tabel1, $on1,'inner');//join
        $this->db->join($nm_tabel2, $on2,'inner');//join
        $this->db->join($nm_tabel3, $on3,'inner');//join
		$this->_get_datatables_query($nm_tabel,$nm_coloum,$orderby,$where);
        if($in != ''){
            $otopt=$this->session->userdata('otopt');
            $this->db->where_in($in,$otopt);
        }
        if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}
    
    function count_filtered_join3($nm_tabel,$nm_coloum,$nm_tabel1,$on1,$nm_tabel2,$on2,$nm_tabel3,$on3,$orderby,$where,$in='')
	{
		$this->_get_datatables_query($nm_tabel,$nm_coloum,$orderby,$where);
        $this->db->from($nm_tabel);
        $this->db->join($nm_tabel1, $on1,'inner');//join
        $this->db->join($nm_tabel2, $on2,'inner');//join
        $this->db->join($nm_tabel3, $on3,'inner');//join
        if($in != ''){
            $otopt=$this->session->userdata('otopt');
            $this->db->where_in($in,$otopt);
        }
		return $this->db->count_all_results();
	}

	public function count_all_join3($nm_tabel,$nm_coloum,$nm_tabel1,$on1,$nm_tabel2,$on2,$nm_tabel3,$on3,$where='',$in='')
	{
		$this->db->from($nm_tabel);
        if($in != ''){
            $otopt=$this->session->userdata('otopt');
            $this->db->where_in($in,$otopt);
        }
        $this->db->where($where); 
        $this->db->join($nm_tabel1, $on1,'inner');//join
        $this->db->join($nm_tabel2, $on2,'inner');//join
        $this->db->join($nm_tabel3, $on3,'inner');//join

		return $this->db->count_all_results();
	}
    
    
   //============================ JOIN TABEL 5 ========================== //   
    function get_datatables_join4($nm_tabel,$nm_coloum,$nm_tabel1,$on1,$nm_tabel2,$on2,$nm_tabel3,$on3,$nm_tabel4,$on4,$orderby,$where)
	{
	    $this->db->from($nm_tabel);
        $this->db->join($nm_tabel1, $on1,'inner');//join
        $this->db->join($nm_tabel2, $on2,'inner');//join
        $this->db->join($nm_tabel3, $on3,'inner');//join
        $this->db->join($nm_tabel4, $on4,'inner');//join
		$this->_get_datatables_query($nm_tabel,$nm_coloum,$orderby,$where);
        if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}
    
    function count_filtered_join4($nm_tabel,$nm_coloum,$nm_tabel1,$on1,$nm_tabel2,$on2,$nm_tabel3,$on3,$nm_tabel4,$on4,$orderby,$where)
	{
		$this->_get_datatables_query($nm_tabel,$nm_coloum,$orderby,$where);
        $this->db->from($nm_tabel);
        $this->db->join($nm_tabel1, $on1,'inner');//join
        $this->db->join($nm_tabel2, $on2,'inner');//join
        $this->db->join($nm_tabel3, $on3,'inner');//join
        $this->db->join($nm_tabel4, $on4,'inner');//join
		return $this->db->count_all_results();
	}

	public function count_all_join4($nm_tabel,$nm_coloum,$nm_tabel1,$on1,$nm_tabel2,$on2,$nm_tabel3,$on3,$nm_tabel4,$on4)
	{
		$this->db->from($nm_tabel);
        $this->db->join($nm_tabel1, $on1,'inner');//join
        $this->db->join($nm_tabel2, $on2,'inner');//join
        $this->db->join($nm_tabel3, $on3,'inner');//join
        $this->db->join($nm_tabel4, $on4,'inner');//join
		return $this->db->count_all_results();
	} 
    
    
    public function cek_dobel($nm_tabel,$where='')
    {
        $this->db->where($where);
        $this->db->from($nm_tabel);
        $isi= $this->db->count_all_results();
        
        if($isi>0){
            return false;
        }else{
            return true;
        }
        
    }
}
