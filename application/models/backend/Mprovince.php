<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mprovince extends CI_Model {

	public function __construct()
    {
        parent::__construct();
        $this->table = $this->db->dbprefix('province');
    }
    public function province_name($provinceid)
    {
        $this->db->where('id', $provinceid);
        $this->db->limit(1);
        $query = $this->db->get($this->table);
        $row=$query->row_array();
        return $row['name'];
    }
}