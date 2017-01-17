<?php
/**
 * Created by PhpStorm.
 * User: wisnubaldas
 * Date: 12/28/16
 * Time: 10:39 AM
 */
class Rate_search extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        $data=array(
            'title'=>'Rate Search',
            'modulname'=>'Rate',
            'scrumb'=>'<a href="'.base_url().'rate/rate_search" class="breadcrumb">Rate Search</a> Rate Scheme',
            'sidemenu'=>'<a href="'.base_url().'">rate</a>',
            'view'=>'rate/rate_search_view',
            'css'=>[
                    link_tag('asset/bower_components/kendo-ui/styles/kendo.common-material.min.css'),
                    link_tag('asset/bower_components/kendo-ui/styles/kendo.material.min.css'),
                    link_tag('asset/rate_app/css/custom.css')
                    ],
            'js' =>[
                    script_tag('asset/assets/js/kendoui_custom.js'),
                    script_tag('asset/assets/js/pages/kendoui.min.js'),
                    script_tag('asset/bower_components/datatables/media/js/jquery.dataTables.min.js'),
                    script_tag('asset/assets/js/custom/datatables_uikit.min.js'),
                    script_tag('assets/js/pages/plugins_datatables.min.js'),
                    script_tag('asset/rate_app/js/search_rate.js')
                    ]
        );
        $this->load->view('template/home',$data);
    }

}