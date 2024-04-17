<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcustomer extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = $this->db->dbprefix('customer');
	}
    //index
    public function customer_all($limit, $first)
    {
        $this->db->where('trash', 1);
        $this->db->order_by('created', 'desc');
        $query = $this->db->get($this->table, $limit, $first);
        return $query->result_array();
    }

    public function customer_count()
    {
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }
    //detail
    public function customer_detail($id)
    {
        $this->db->where('id',$id);
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }
    //RECYCLEBIN
    public function customer_trash($limit, $first)
    {
        $this->db->where('trash',0);
        $query = $this->db->get($this->table, $limit, $first);
        return $query->result_array();
    }

    public function customer_trash_count()
    {
        $this->db->where('trash', 0);
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }

    public function customer_restore($id)
    {
        $data=array('trash'=>1);
        $this->db->where('id',$id);
        $this->db->update($this->table, $data);
    }
    //DELETE VV
    public function customer_delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete($this->table);
    }
    public function customer_update($mydata,$id)
    {
        $this->db->where('id',$id);
        $this->db->update($this->table, $mydata);
    }

}
