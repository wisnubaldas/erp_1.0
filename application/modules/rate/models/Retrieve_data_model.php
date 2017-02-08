<?php
/**
 * Created by PhpStorm.
 * User: wisnubaldas
 * Date: 12/28/16
 * Time: 2:06 PM
 */
class Retrieve_data_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database('rate_db', true);
    }

    function get_airlines($w,$l)
    {
        if ($l === '')
        {
            return array();
        }else{
            $this->db->like('msvendor_hdr.Name',$l);
            $this->db->select('msvendor_hdr.Id as vendorid,
                                msvendor_hdr.Name as vendorname,
                                msvendor_hdr.Address as address,
                                msvendor_hdr.imgName,
                                mscity.Id as cityid,
                                mscity.Name as cityname,
                                mscountry.Id as countryid,
                                mscountry.Name as countryname');

            $this->db->from('msvendor_hdr');
            $this->db->join('mscity', 'msvendor_hdr.Idcity = mscity.Id','left');
            $this->db->join('mscountry', 'mscity.Idcou = mscountry.Id','left');
            $query = $this->db->get();
            return $query->result_array();
//            return htmlspecialchars($this->db->last_query());
        }
    }
    function get_port($w,$l)
    {
        if ($l === '') {
            return array(array('vendorname' => 'Data null'));
        } else {
            $this->db->cache_on();
            $this->db->start_cache();
            $this->db->where('IdService','005');
            $this->db->like('PortGabung', $l);
            $this->db->select('*');
            $this->db->from('trport_search');
            $query = $this->db->get();
            $data = $query->result_array();
            return $data;
            return htmlspecialchars($this->db->last_query());
        }
    }
    function get_rate($data,$custom,$total)
    {
//        $this->db->limit(10);
        // cari jumlah rate schemenya
        $totalscheme = $this->db->where($total)
                    ->select('mscost_type.Id, mscost_type.Name, COUNT(trcost_hdr.Id) AS jumlah')
                    ->from('mscost_type')
                    ->join('trcost_hdr','mscost_type.Id = trcost_hdr.IdCostType', 'left')
                    ->join('msvendor_hdr', 'msvendor_hdr.Id = trcost_hdr.IdVendor')
                    ->group_by('mscost_type.Id')
                    ->get();


        // bikin header querynya
        $this->db->order_by('mscost_type.Id', 'DESC');
        $this->db->where($data);
        $query = $this->db->select('trcost_hdr.Id as IDnya, mscost_type.Name as alias , msvendor_hdr.Name as carrier,
                                trcost_hdr.IdOriPort as origin , trcost_hdr.IdDestPort as destination,
                                trcost_hdr.Frequency as frequency , trcost_hdr.IdComm as comodity,
                                trcost_hdr.LeadTime as leadtime , trcost_hdr.ValidTo as validuntil,
                                mscost_type.Name as tipecostname, mscost_type.Id as idscheme, 
                                trcost_hdr.Remarks as remarkhdr')
            ->from('trcost_hdr')
            ->join('msvendor_hdr', 'msvendor_hdr.Id = trcost_hdr.IdVendor')
            ->join('mscost_type', 'mscost_type.Id = trcost_hdr.IdCostType')
            ->get();
        $headernya = $query->result_array();

//     return htmlspecialchars($this->db->last_query());
        $result = [];
        foreach ($headernya as $v)
        {
            // cari nama port untuk header
//            $data_in = [$v['origin'],$v['destination']];
//            $q_portname = $this->db->where_in('Codes',$data_in)
//                                    ->select('Codes,Name')
//                                    ->from('msport')
//                                    ->get();
            $a = "SELECT  Codes, Name FROM msport AS s WHERE Codes =".$this->db->escape($v['origin'])."UNION SELECT  Codes,Name FROM msport AS s WHERE Codes=".$this->db->escape($v['destination']);
            $q_portname = $this->db->query($a);
            $ordes = $q_portname->result_array();

            // replace array jika ada custom search
            $v = array_replace($v,$custom);
            $query = $this->db->where('IdCostHeader', $v['IDnya'])
                ->select('IdCostHeader as id, IdSubCostName as charge, Amount as rate, MarkUpValue as ratemarkup, Remarks as remark, IdCur')
                ->from('trcost_dtl')
                ->get();

            $IDnya = $v['IDnya'];
            $idscheme = $v['idscheme'];
            $alias = $v['alias'];
            $carrier = $v['carrier'];
            $comodity = $v['comodity'];
            $destination = $v['destination'];
            $frequency = $v['frequency'];
            $leadtime = $v['leadtime'];
            $origin = $v['origin'];
            $validuntil = $v['validuntil'];
            $remarkhdr = $v['remarkhdr'];
            $portname = ['orgname'=>$ordes[0],'dstname'=>$ordes[1]]; // array buat portname
            $totalscm = $totalscheme->result_array(); // array total scheme
            $detail = $query->result_array(); // array detailnya
//            $inject = [$idscheme = array_merge($data)];
                array_push($result, compact('idscheme','IDnya','alias','carrier','comodity',
                'destination','frequency','leadtime','origin','validuntil','remarkhdr', 'portname','totalscm','detail'));
        }
        return $result;
    }
    function get_tab()
    {
        $query = $this->db
            ->where('isDefault',0)
            ->where('IdService',005)
            ->select('Id,Name')
            ->from('mscost_type')
            ->get();
        return $query->result_array();
    }
}