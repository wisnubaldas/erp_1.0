<?php
/**
 * Created by PhpStorm.
 * User: wisnubaldas
 * Date: 1/20/17
 * Time: 2:51 PM
 */
class Ocean_try_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database('rate_db', true);
    }
    function get_tab()
    {
        $query = $this->db
            ->where('IdService',006)
//            ->or_where('isDefault',1)
            ->select('Id,Name')
            ->from('mscost_type')
            ->get();
//        return htmlspecialchars($this->db->last_query());
        return $query->result_array();
    }
    function get_ordes($data)
    {
        $query = $this->db->where('IdService',006)
                            ->like($data)
                            ->select('PortCode,PortName,CityName,CouName,PortGabung')
                            ->from('trport_search')
                            ->get();
        return $query->result_array();
    }
    function get_port($l)
    {
        if ($l === '') {
            return array();
        } else {
            $this->db->like($l);
            $this->db->where('msvendor_service_dtl.IdService',006);
            $this->db->select('msvendor_hdr.Id as vendorid,
                                msvendor_hdr.Name as vendorname,
                                msvendor_hdr.Address as address,
                                msvendor_hdr.imgName,
                                mscity.Id as cityid,
                                mscity.Name as cityname,
                                mscountry.Id as countryid,
                                mscountry.Name as countryname');
            $this->db->from('msvendor_hdr');
            $this->db->join('msvendor_service_dtl', 'msvendor_service_dtl.IdVendor = msvendor_hdr.Id', 'left');
            $this->db->join('mscity', 'msvendor_hdr.Idcity = mscity.Id', 'left');
            $this->db->join('mscountry', 'mscity.Idcou = mscountry.Id', 'left');
            $query = $this->db->get();
            return $query->result_array();
//            return htmlspecialchars($this->db->last_query());
        }
    }
    function get_ocean_rate($w)
    {
        $q = $this->db->where($w)
                ->select('Id,IdOriCou,IdUnit,IdComm,IdVendor,IdOriPort,IdDestPort,IdCostType,LeadTime,ValidFrom,Frequency,Remarks')
                ->from('trcost_hdr')
                ->get();
                $data = [];
                foreach ($q->result() as $v)
                {
                    $costnya = $this->costtype($v->IdCostType);

                    $remark = $v->Remarks;
                    $valid = $v->ValidFrom;
                    $leadtime = $v->LeadTime;
                    $Frequency = $v->Frequency;
                    $costtype = $costnya[0]->Name;
                    $destination = $this->ordest($v->IdDestPort);
                    $origin = $this->ordest($v->IdOriPort);
                    $vendor = $this->vendor($v->IdVendor);
                    $comodity =$this->commodity($v->IdComm);
//                    $unit = $this->idunit();
                    $detail = $this->detailnya($v->Id);
                    array_push($data,compact('costtype','leadtime','valid','Frequency','remark','comodity','vendor','origin','destination','detail'));
                }

        return $data;
//        return htmlspecialchars($this->db->last_query());
    }
    private function costtype($data)
    {
        $q = $this->db->where('Id', $data)
            ->select('Name')
            ->from('mscost_type')
            ->get();
        $result = $q->result();
        return $result;
    }
    private function ordest($port)
    {
        $q = $this->db->where('PortCode', $port)
            ->select('PortCode,PortName,CityName,CouName')
            ->from('trport_search')
            ->get();
        return $q->result_array();
    }
    private function vendor($data)
    {
        $q = $this->db->where('Id', $data)
            ->select('Id,Name,Address,imgName')
            ->from('msvendor_hdr')
            ->get();
        return $q->result_array();
    }
    private function commodity($data)
    {
        $q = $this->db->where('Id', $data)
            ->select('Id,Desc')
            ->from('mscommodity')
            ->get();
        return $q->result_array();
    }
    private function idunit()
    {
        $q = $this->db
            ->select('Id,Name,Satuan')
            ->from('msunit')
            ->get();
        return $q->result_array();
    }
    private function detailnya($data)
    {
        $q = $this->db->where('IdCostHeader', $data)
            ->select('IdCostHeader,IdSubCostName,msunit.Name as labelcon,Amount,IdCur')
            ->join('mssub_costname','trcost_dtl.IdSubCostName = mssub_costname.Id','left')
            ->join('msunit', 'mssub_costname.IdUnit = msunit.Id')
            ->from('trcost_dtl')
            ->order_by('msunit.Id','ASC')
            ->get();
        $detail = $q->result_array();
        return $detail;
    }
}