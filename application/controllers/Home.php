<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        // 필요한 모델 로드
        // $this->load->model('Cpu_model');
        // $this->load->model('Device_model');

        // MySQL 버전
        // $this->load->model('mysql/Cpu_model_mysql', 'Cpu_model');
        // $this->load->model('mysql/Device_model_mysql', 'Device_model');

        // PostgreSQL 버전
        $this->load->model('psql/Cpu_model_psql', 'Cpu_model');
        $this->load->model('psql/Device_model_psql', 'Device_model');

        // Oracle 버전
        // $this->load->model('oracle/Cpu_model_oracle', 'Cpu_model');
        // $this->load->model('oracle/Device_model_oracle', 'Device_model');

        // -----------------------------------------------------------------------------------

        // 데이터 준비
        $data['totalCpuCount']    = $this->Cpu_model->count_all();
        $data['totalDeviceCount'] = $this->Device_model->count_all();
        $data['hotCpus']          = $this->Cpu_model->get_hot_items();
        $data['hotDevices']       = $this->Device_model->get_hot_items();

        // 뷰 로드 (SSR index.php)
        $this->load->view('index', $data);






    }
}
