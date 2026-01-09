<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device_model_psql extends CI_Model {

    public function __construct() {
        parent::__construct();
        // DB 연결 로드 (PostgreSQL 그룹)
        // $this->load->database();
        $this->db_psql = $this->load->database('psql', TRUE);
    }

    public function count_all() {
        // 테이블명: device (스키마: mdi_schem)
        // $query = $this->db->query("SELECT COUNT(*) AS cnt FROM mdi_schem.device");
        $query = $this->db_psql->query("SELECT COUNT(*) AS cnt FROM mdi_schem.device");
        return $query->row()->cnt;
    }

    public function get_hot_items() {
        // DB 구조에 맞게 choice_device 기준으로 인기순 정렬 (PostgreSQL LIMIT)
        // $query = $this->db->query("SELECT * FROM mdi_schem.device ORDER BY choice_device DESC LIMIT 5");
        $query = $this->db_psql->query("SELECT * FROM mdi_schem.device ORDER BY choice_device DESC LIMIT 5");
        return $query->result();
    }
}
