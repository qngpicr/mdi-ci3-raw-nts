<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device_model_oracle extends CI_Model {

    public function __construct() {
        parent::__construct();
        // DB 연결 로드
        $this->load->database();
    }

    public function count_all() {
        // 테이블명: device
        $query = $this->db->query("SELECT COUNT(*) AS cnt FROM device");
        return $query->row()->cnt;
    }

    public function get_hot_items() {
        // DB 구조에 맞게 choice_device 기준으로 인기순 정렬 (Oracle FETCH FIRST)
        $query = $this->db->query("SELECT * FROM device ORDER BY choice_device DESC FETCH FIRST 5 ROWS ONLY");
        return $query->result();
    }
}
