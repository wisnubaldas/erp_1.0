<?php
class Import_acceptance_breakdown extends CI_Controller{
	function __construct(){
        parent::__construct();
			$this->load->model('warehouse/Warehouse');
    }	
	
	public function insert_wh_imp_breakdown_header()
	{   
	    $nmtabel='wh_imp_breakdown_header';
				if(isset($_POST['BreakdownNumber'])){
			$ischecked='1';
		} else {
			$ischecked='0';
			}
		$data = array(
				'BreakdownNumber'=>$this->input->post('BreakdownNumber'),
				'AirlinesCode'=>$this->input->post('AirlinesCode'),
				'OriginCode'=>$this->input->post('OriginCode'),
				'FlightNumber'=>$this->input->post('FlightNumber'),
				'DateOfFlight'=>$this->input->post('DateOfFlight'),
				'DateOfArrival'=>$this->input->post('DateOfArrival'),
				'TimeOfArrival'=>$this->input->post('TimeOfArrival'),
				'EmployeeNumber'=>$this->input->post('EmployeeNumber'),
				'OperatorName'=>$this->input->post('OperatorName'),
				'TotalMasterAWB'=>$this->input->post('TotalMasterAWB'),
				'TotalPieces'=>$this->input->post('TotalPieces'),
				'TotalNetto'=>$this->input->post('TotalNetto'),
				'TotalCAW'=>$this->input->post('TotalCAW'),
				'AirCraftNumber'=>$this->input->post('AirCraftNumber'),
				'Supervisor'=>$this->input->post('Supervisor')
			);
		$insert = $this->Warehouse->insert_data($data,$nmtabel);
		echo json_encode(array("status" => TRUE));
	}
	
	public function update_wh_imp_breakdown_header()
	{
	    $nmtabel='wh_imp_breakdown_header';
        $key='BreakdownNumber';
		$data = array(
				'BreakdownNumber'=>$this->input->post('BreakdownNumber'),
				'AirlinesCode'=>$this->input->post('AirlinesCode'),
				'OriginCode'=>$this->input->post('OriginCode'),
				'FlightNumber'=>$this->input->post('FlightNumber'),
				'DateOfFlight'=>$this->input->post('DateOfFlight'),
				'DateOfArrival'=>$this->input->post('DateOfArrival'),
				'TimeOfArrival'=>$this->input->post('TimeOfArrival'),
				'EmployeeNumber'=>$this->input->post('EmployeeNumber'),
				'OperatorName'=>$this->input->post('OperatorName'),
				'TotalMasterAWB'=>$this->input->post('TotalMasterAWB'),
				'TotalPieces'=>$this->input->post('TotalPieces'),
				'TotalNetto'=>$this->input->post('TotalNetto'),
				'TotalCAW'=>$this->input->post('TotalCAW'),
				'AirCraftNumber'=>$this->input->post('AirCraftNumber'),
				'Supervisor'=>$this->input->post('Supervisor')
			);
		$this->Warehouse->update_data(array($key => $this->input->post('BreakdownNumber')), $data,$nmtabel);
		echo json_encode(array("status" => TRUE));
	}
//------------------------------------------------------------------------------------------------------------------------

	public function insert_wh_imp_breakdown_detail()
	{   
	    $nmtabel='wh_imp_breakdown_detail';
				if(isset($_POST['BreakdownNumber']) AND isset($_POST['MasterAWB'])){
			$ischecked='1';
		} else {
			$ischecked='0';
			}
		$data = array(				
				'BreakdownNumber'=>$this->input->post('BreakdownNumber'),
				'MasterAWB'=>$this->input->post('MasterAWB'),
				'Parsial'=>$this->input->post('Parsial'),
				'PosMaster'=>$this->input->post('PosMaster'),
				'TransitCode'=>$this->input->post('TransitCode'),
				'Pieces'=>$this->input->post('Pieces'),
				'Netto'=>$this->input->post('Netto'),
				'Volume'=>$this->input->post('Volume'),
				'KindOfCode'=>$this->input->post('KindOfCode'),
				'KindOfGood'=>$this->input->post('KindOfGood'),
				'UldCardNumber'=>$this->input->post('UldCardNumber'),
				'Remark'=>$this->input->post('Remark'),
				'EmployeeNumber'=>$this->input->post('EmployeeNumber'),
				'DateOfBreakdown'=>$this->input->post('DateOfBreakdown'),
				'TimeOfBreakdown'=>$this->input->post('TimeOfBreakdown'),
				'AirlinesCode'=>$this->input->post('AirlinesCode'),
				'FlightNumber'=>$this->input->post('FlightNumber'),
				'OriginCode'=>$this->input->post('OriginCode'),
				'LocationCode'=>$this->input->post('LocationCode')
			);
		$insert = $this->Warehouse->insert_data($data,$nmtabel);
		echo json_encode(array("status" => TRUE));
	}
	
	public function update_wh_imp_breakdown_detail()
	{
	    $nmtabel='wh_imp_breakdown_header';
        $Noid='Noid';
		$v_Noid=$this->input->post('f_noid')
		
		$data = array(
				'Noid'=>$this->input->post('Noid'),
				'BreakdownNumber'=>$this->input->post('BreakdownNumber'),
				'MasterAWB'=>$this->input->post('MasterAWB'),
				'Parsial'=>$this->input->post('Parsial'),
				'PosMaster'=>$this->input->post('PosMaster'),
				'TransitCode'=>$this->input->post('TransitCode'),
				'Pieces'=>$this->input->post('Pieces'),
				'Netto'=>$this->input->post('Netto'),
				'Volume'=>$this->input->post('Volume'),
				'KindOfCode'=>$this->input->post('KindOfCode'),
				'KindOfGood'=>$this->input->post('KindOfGood'),
				'UldCardNumber'=>$this->input->post('UldCardNumber'),
				'Remark'=>$this->input->post('Remark'),
				'EmployeeNumber'=>$this->input->post('EmployeeNumber'),
				'DateOfBreakdown'=>$this->input->post('DateOfBreakdown'),
				'TimeOfBreakdown'=>$this->input->post('TimeOfBreakdown'),
				'AirlinesCode'=>$this->input->post('AirlinesCode'),
				'FlightNumber'=>$this->input->post('FlightNumber'),
				'OriginCode'=>$this->input->post('OriginCode'),
				'LocationCode'=>$this->input->post('LocationCode')
			);
		$this->Warehouse->update_data(array($key=$v_Noid), $data,$nmtabel);
		echo json_encodeb(array("status" => TRUE));
	}
	
	
}
	