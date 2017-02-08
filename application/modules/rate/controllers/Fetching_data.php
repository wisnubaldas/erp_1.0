<?php
/**
 * Created by PhpStorm.
 * User: wisnubaldas
 * Date: 12/28/16
 * Time: 2:02 PM
 */
class Fetching_data extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('retrieve_data_model');
//        $this->get_data_tab();
    }

    function get_airlines()
    {
        $data = $this->input->get();
//        print_r($data);
        $datafilter = $data['filter']['filters'];
        $data1 = $this->retrieve_data_model->get_airlines($datafilter[0]['operator'],strtoupper($datafilter[0]['value']));

        header('Content-Type: application/json');
        echo json_encode($data1);
//            print_r($data1);
    }
    function get_port()
    {
        $data = $this->input->get();
        $datafilter = $data['filter']['filters'];
        $data1 = $this->retrieve_data_model->get_port($datafilter[0]['operator'],strtoupper($datafilter[0]['value']));
//        print_r($data1);

        $hasil = [];
        foreach ($data1 as $value)
        {
                $portid = $value['id'];
                $portcode = $value['PortCode'];
                $portname = ucwords($value['PortName']);
                $cityname = ucwords($value['CityName']);
//                $countryid = $value['countryid'];
                $countryname = ucwords(strtolower($value['CouName']));
//                $servicename = ucwords(strtolower($value['servicename']));
//                $servcategory = $value['servcategory'];
                $i = compact('portid','portcode','portname','cityname','countryname');
                array_push($hasil,$i);
        }
//        print_r($data1);
        header('Content-Type: application/json');
        echo json_encode($hasil);
    }
    function get_rate()
    {
//        $form = $this->input->post();
        $airlines = $this->input->post('airlines');
//        $IdOriPort = $this->input->post('org');
//        $IdDestPort = $this->input->post('dst');
//        $idscheme = $this->input->post('idscheme');
        if($airlines === '')
        {
            $data = [
                'trcost_hdr.IdOriPort'=>$this->input->post('org'),
                'trcost_hdr.IdDestPort'=>$this->input->post('dst'),
                'mscost_type.Id'=>$this->input->post('idscheme')];
            $custom = [];
            $total = ['trcost_hdr.IdOriPort'=>$this->input->post('org'),
                    'trcost_hdr.IdDestPort'=>$this->input->post('dst')];
            $result = $this->retrieve_data_model->get_rate($data,$custom,$total);
            header('Content-Type: application/json');
            echo json_encode($result, JSON_PRETTY_PRINT);
        }
        else{
            $data = ['msvendor_hdr.Name'=>$this->input->post('airlines'),
                'trcost_hdr.IdOriPort'=>$this->input->post('org'),
                'trcost_hdr.IdDestPort'=>$this->input->post('dst'),
                'mscost_type.Id'=>$this->input->post('idscheme')];
            $custom = [];
            $total = ['msvendor_hdr.Name'=>$this->input->post('airlines'),
                'trcost_hdr.IdOriPort'=>$this->input->post('org'),
                'trcost_hdr.IdDestPort'=>$this->input->post('dst')];
            $result = $this->retrieve_data_model->get_rate($data, $custom, $total);
            header('Content-Type: application/json');
            echo json_encode($result, JSON_PRETTY_PRINT);
//            print_r($result);
        }
    }
    function get_data_tab()
    {
        $result = $this->retrieve_data_model->get_tab();
        header('Content-Type: application/json');
        echo json_encode($result, JSON_PRETTY_PRINT);
    }
    function get_rate_by_id()
    {
        $data = [
            'trcost_hdr.IdOriPort'=>$this->input->get('org'),
            'trcost_hdr.IdDestPort'=>$this->input->get('dst'),
            'mscost_type.Id'=>$this->input->get('mscost_type')];
        $custom = [];
        $total = [];
        $result = $this->retrieve_data_model->get_rate($data,$custom,$total);
//        print_r($result);
        header('Content-Type: application/json');
        echo json_encode($result, JSON_PRETTY_PRINT);

    }
}