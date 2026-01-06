<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        // 필요한 모델 로드
        $this->load->model('Cpu_model');
        $this->load->model('Device_model');

        // 데이터 준비
        $data['totalCpuCount']    = $this->Cpu_model->count_all();
        $data['totalDeviceCount'] = $this->Device_model->count_all();
        $data['hotCpus']          = $this->Cpu_model->get_hot_items();
        $data['hotDevices']       = $this->Device_model->get_hot_items();

        // 뷰 로드 (SSR index.php)
        $this->load->view('index', $data);
    }
}
