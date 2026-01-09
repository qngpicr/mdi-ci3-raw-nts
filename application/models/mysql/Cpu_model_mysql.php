<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpu_model_mysql extends CI_Model {

    public function __construct() {
        parent::__construct();
        // DB 연결 로드 (MySQL 그룹)
        // $this->load->database();
        $this->db_mysql = $this->load->database('mysql', TRUE);
    }

    public function count_all() {
        // 테이블명: cpu
        // $query = $this->db->query("SELECT COUNT(*) AS cnt FROM cpu");
        $query = $this->db_mysql->query("SELECT COUNT(*) AS cnt FROM cpu");
        return $query->row()->cnt;
    }

    public function get_hot_items() {
        // DB 구조에 맞게 choice_cpu 기준으로 인기순 정렬 (MySQL LIMIT)
        // $query = $this->db->query("SELECT * FROM cpu ORDER BY choice_cpu DESC LIMIT 5");
        $query = $this->db_mysql->query("SELECT * FROM cpu ORDER BY choice_cpu DESC LIMIT 5");
        return $query->result();
    }
}
