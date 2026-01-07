<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpu_model_oracle extends CI_Model {

    public function __construct() {
        parent::__construct();
        // DB 연결 로드
        $this->load->database();
    }

    public function count_all() {
        // 테이블명: cpu
        $query = $this->db->query("SELECT COUNT(*) AS cnt FROM cpu");
        return $query->row()->cnt;
    }

    public function get_hot_items() {
        // DB 구조에 맞게 choice_cpu 기준으로 인기순 정렬 (Oracle FETCH FIRST)
        $query = $this->db->query("SELECT * FROM cpu ORDER BY choice_cpu DESC FETCH FIRST 5 ROWS ONLY");
        return $query->result();
    }
}
