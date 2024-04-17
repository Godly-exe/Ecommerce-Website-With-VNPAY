<?php
class Mconfig extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->table = $this->db->dbprefix('config');
	}

	public function config_price_ship(){
		$query = $this->db->get($this->table);
		$row=$query->row_array();
		return $row['priceShip'];
	}
	public function get_amount_number_used($id)
	{
		$this->db->where('id', $id);
		$this->db->limit(1);
		$query = $this->db->get('db_discount');
		$row=$query->row_array();
		return $row['number_used']; 
	}
	public function get_config_coupon_discount($code){
		$this->db->where('code', $code);
		$this->db->where('status', 1);
		$this->db->where('trash', 1);
		$this->db->limit(1);
		$query = $this->db->get('db_discount');
		return $query->result_array();
	}
	 //Cập nhật
	public function coupon_update($mydata,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('db_discount', $mydata);
	}
	
}