<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msliders extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = $this->db->dbprefix('slider');
	}
	//index
	public function slider_all($limit,$first)
    {
        $this->db->where('trash', 1);
        $this->db->order_by('created', 'desc');
        $query = $this->db->get($this->table, $limit,$first);
        return $query->result_array();
    }
    public function slider_count()
    {
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }

    public function slider_detail($id)
    {
        $this->db->where('trash', 1);
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row_array();   
    }
    //RECYCLEBIN
    public function slider_trash_count()
	{
        $this->db->where('trash', 0);
        $query = $this->db->get($this->table);
        return count($query->result_array());
	}

	public function slider_trash($limit, $first)
	{
		$this->db->where('trash',0);
		$query = $this->db->get($this->table, $limit, $first);
        return $query->result_array();
	}

	public function slider_restore($id)
	{
		$data=array('trash'=>1);
		$this->db->where('id',$id);
		$this->db->update($this->table, $data);
	}

	//Thao tác

    public function slider_insert($mydata)
	{
		$this->db->insert($this->table,$mydata);
	}
	public function slider_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
	public function slider_update($mydata,$id)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table, $mydata);
	}
}