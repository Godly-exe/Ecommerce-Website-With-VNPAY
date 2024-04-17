<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Morderdetail extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = $this->db->dbprefix('orderdetail');
	}

	public function orderdetail_orderid($id)
	{
		$this->db->where('orderid', $id);
		$this->db->where('status',1);
		$this->db->where('trash',1);
		$query = $this->db->get($this->table);
        return $query->result_array();
	}

	public function orderdetail_delete($id)
    {
        $this->db->where('orderid',$id);
        $this->db->delete($this->table);
    }

    public function orderdetail_detail($productid)
    {
    	$this->db->where('db_orderdetail.productid',$productid);
        $this->db->join('db_order','db_order.id = db_orderdetail.orderid');
		$this->db->where('db_order.status',0);
		$query = $this->db->get($this->table);
        return $query->result_array();
    }
}