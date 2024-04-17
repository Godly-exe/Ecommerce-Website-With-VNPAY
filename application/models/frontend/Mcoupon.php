<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcoupon extends CI_Model {

	public function __construct()
    {
        parent::__construct();
        $this->table = $this->db->dbprefix('discount');
    }
    
    //Thêm
    public function coupon_insert($mydata)
    {
        $this->db->insert($this->table,$mydata);
    }
}