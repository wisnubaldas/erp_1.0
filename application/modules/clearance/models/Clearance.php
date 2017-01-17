<?php
class Clearance extends CI_Model{
    function __construct(){
        parent::__construct();
        //$this->load->model('model_app');
		//$this->load->model('customer/Mhouse');
    }

	public function insert_data($data,$nmtabel)
	{
		$this->db->insert($nmtabel, $data);
		return $this->db->insert_id();
	}
	public function update_data($where, $data, $nmtabel)
	{
		$this->db->update($nmtabel, $data, $where);
		return $this->db->affected_rows();
	}
	
	public function delete_by_id($id,$nmtabel,$key)
	{
		$this->db->where($key, $id);
		$this->db->delete($nmtabel);
	}
	
}


