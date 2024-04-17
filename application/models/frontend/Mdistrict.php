<?php
class Mdistrict extends CI_Model {
        public function __construct()
        {
                parent::__construct();
                $this->table = $this->db->dbprefix('district');
        }

        public function district_provinceid($id)
        {
                $this->db->where('provinceid', $id);
                $this->db->order_by('name', 'asc');
                $query = $this->db->get($this->table);
                return $query->result_array();
        }

        public function district_name($districtid)
        {
                $this->db->where('id', $districtid);
                $this->db->order_by('name', 'asc');
                $this->db->limit(1);
                $query = $this->db->get($this->table);
                $row=$query->row_array();
                return $row['name'];
        }
         
}