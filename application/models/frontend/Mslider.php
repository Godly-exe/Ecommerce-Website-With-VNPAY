<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mslider extends CI_Model {

	public function __construct()
    {
            parent::__construct();
            $this->table = $this->db->dbprefix('slider');
    }
    public function list_img_banner()
    {
            $this->db->where('status', 1);
            $this->db->where('trash', 1);
            $query = $this->db->get($this->table);
            return $query->result_array();
    }
}
