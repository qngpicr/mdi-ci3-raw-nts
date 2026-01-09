<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device_model_mysql extends CI_Model {

    public function __construct() {
        parent::__construct();
        // DB 연결 로드 (MySQL 그룹)
        // $this->load->database();
        $this->db_mysql = $this->load->database('mysql', TRUE);
    }

    public function count_all() {
        // 테이블명: device
        // $query = $this->db->query("SELECT COUNT(*) AS cnt FROM device");
        $query = $this->db_mysql->query("SELECT COUNT(*) AS cnt FROM device");
        return $query->row()->cnt;
    }

    public function get_hot_items() {
        // DB 구조에 맞게 choice_device 기준으로 인기순 정렬 (MySQL LIMIT)
        // $query = $this->db->query("SELECT * FROM device ORDER BY choice_device DESC LIMIT 5");
        $query = $this->db_mysql->query("SELECT * FROM device ORDER BY choice_device DESC LIMIT 5");
        return $query->result();
    }
}
