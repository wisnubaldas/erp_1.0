<?php
/**
 * Created by PhpStorm.
 * User: baldas
 * Date: 06/09/2016
 * Time: 17:28
 */
class Tps_service extends CI_Controller{
    private $wsdl;
    private $client;

    function __construct()
    {
        parent::__construct();
        $this->load->library("Nusoap_lib");
        $this->load->helper('xml');
        $this->load->helper('array');
        $this->load->model('tps_model');

        global $wsdl, $client;
        $wsdl = "https://tpsonline.beacukai.go.id/tps/service.asmx?WSDL";
        $client = new nusoap_client($wsdl, true);
        $error  = $client->getError();
        if($error){
            echo $error;
        }
    }





    function gate_in()
    {
        global $wsdl, $client;
        $xmlnya = $this->tps_model->get_datain();
        if(count($xmlnya) == 0)
        {
            echo 'xml null';
            $data = array('lognya'=>'Data getin XML kosong',
                    'date'=>date('Y-m-d h:m:s'),
                    'status'=>'error');
                $this->tps_model->add_log($data);
        }else{
            foreach ($xmlnya as $v)
            {
                $param = array("fStream" =>$v['xml'],
                    "Username"=>"BGD1",
                    "Password"=>"BGD12345");

                $result = $client->call('CoarriCodeco_Kemasan', $param);
                if($client->fault)
                {
                    print_r($result);
                }else{
                    $error = $client->getError();
                    if ($error) {
                        print_r($error);
                    }
                }

                if($result)
                {
                    $hasil = $result['CoarriCodeco_KemasanResult'];
                    $posisi=strpos($hasil,"Berhasil BGD");
                    if ($posisi !== FALSE){
//                        // kalo result ada kata berhasil nya update table flag jadi 1
                        $data = array('flag_transfer'=>'1',
                                        'ref_num'=>substr($hasil,16,16));
//                        $this->tps_model->update_flag('rpx_imp_getin',$data,$no_bl_awb,$no_master_bl_awb);
                        $this->tps_model->update_flag('get_imp_in',$data,$v['id']);
//                        // lempar juga datanya ke log table
                        $data = array('lognya'=>$hasil,
                            'date'=>date('Y-m-d h:m:s'),
                            'status'=>'success');
                        $this->tps_model->add_log($data);
                    }else {
//                        // kalo ngga ada kata berhasil lempar juga ke log table
                        print_r($client->getError());
                        $data = array('lognya'=>$hasil,
                            'date'=>date('Y-m-d h:m:s'),
                            'status'=>'error');
                            $this->tps_model->add_log($data);
                    }

                }else{
                    $data = array('lognya'=>'Gatein AWB :'.$v['awb'].',MAWB :'.$v['mawb'].' Error koneksi',
                            'date'=>date('Y-m-d h:m:s'),
                            'status'=>'error');
                            $this->tps_model->add_log($data);
                }
            }
        }
    }

    function gate_out()
    {
        global $wsdl, $client;
        $xmlnya = $this->tps_model->get_dataout();
        if(count($xmlnya) == 0)
        {
            echo 'xml null';
            $data = array('lognya'=>'Data getout XML kosong',
                'date'=>date('Y-m-d h:m:s'),
                'status'=>'error');
            $this->tps_model->add_log($data);
        }else{
            foreach ($xmlnya as $v)
            {
                print_r($v);
                $param = array("fStream" =>$v['xml'],
                    "Username"=>"BGD1",
                    "Password"=>"BGD12345");
                $result = $client->call('CoarriCodeco_Kemasan', $param);
                if($result)
                {
                    $hasil = $result['CoarriCodeco_KemasanResult'];
                    $posisi=strpos($hasil,"Berhasil BGD");
                    if ($posisi !== FALSE){
//                        // kalo result ada kata berhasil nya update table flag jadi 1
                        $data = array('flag_transfer'=>'1',
                            'ref_num'=>substr($hasil,16,16));
//                        $this->tps_model->update_flag('rpx_imp_getin',$data,$no_bl_awb,$no_master_bl_awb);
                        $this->tps_model->update_flag('get_imp_out',$data,$v['id']);
//                        // lempar juga datanya ke log table
                        $data = array('lognya'=>$hasil,
                            'date'=>date('Y-m-d h:m:s'),
                            'status'=>'success');
                        $this->tps_model->add_log($data);
                    }else {
//                        // kalo ngga ada kata berhasil lempar juga ke log table
                        $data = array('lognya'=>$hasil,
                            'date'=>date('Y-m-d h:m:s'),
                            'status'=>'error');
                        $this->tps_model->add_log($data);
                    }

                }else{
                    $data = array('lognya'=>'Gate Out AWB :'.$v['awb'].',MAWB :'.$v['mawb'].' Error koneksi',
                        'date'=>date('Y-m-d h:m:s'),
                        'status'=>'error');
                    $this->tps_model->add_log($data);
                }
            }
        }
    }

    function tes_service()
    {
        $xmlnya = $this->tps_model->get_datain();
        print_r($xmlnya);
    }
}