<?php
/**
 * Created by PhpStorm.
 * User: wisnubaldas
 * Date: 1/19/17
 * Time: 3:22 PM
 */
class Ocean_rate extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ocean_try_model');
    }

    function get_data_tab()
    {
        $result = $this->ocean_try_model->get_tab();
        header('Content-Type: application/json');
        echo json_encode($result, JSON_PRETTY_PRINT);
    }
    function ordes()
    {
        foreach ($this->input->get() as $value) {
            $input = $value['filters'][0];
            $data = [$input['operator'] => $input['value']];
        $result = $this->ocean_try_model->get_ordes($data);
        header('Content-Type: application/json');
        echo json_encode($result, JSON_PRETTY_PRINT);
        }
    }
    function port()
    {
        foreach ($this->input->get() as $value) {
            $input = $value['filters'][0];
            $data = [$input['operator'] => $input['value']];
            $result = $this->ocean_try_model->get_port($data);
//            print_r($result);
            header('Content-Type: application/json');
            echo json_encode($result, JSON_PRETTY_PRINT);
        }
    }
    function ocean_rate()
    {
        $postnya = $this->input->post();
        if ($postnya['org'] === '' || $postnya['dst'] === '')
        {
            return $this->output
                            ->set_content_type('application/json')
                            ->set_status_header(500)
                            ->set_output(json_encode($postnya));
        }elseif ($postnya['prt'] === ''){
            $data = ['IdOriPort'=>$postnya['org'],'IdDestPort'=>$postnya['dst']];
            $result = $this->ocean_try_model->get_ocean_rate($data);
//            print_r($result);
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode($result, JSON_PRETTY_PRINT));
        }else{
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($postnya));
        }
    }
}