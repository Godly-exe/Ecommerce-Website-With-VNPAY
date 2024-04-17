<?php
class Mprovince extends CI_Model {
        public function __construct()
        {
                parent::__construct();
                $this->table = $this->db->dbprefix('province');
        }

        public function province_all()
        {
                $this->db->order_by('name', 'asc');
                $query = $this->db->get($this->table);
                return $query->result_array();
        }

        public function province_name($provinceid)
        {
                $this->db->where('id', $provinceid);
                $this->db->order_by('name', 'asc');
                $this->db->limit(1);
                $query = $this->db->get($this->table);
                $row=$query->row_array();
                return $row['name'];
        }
         
}