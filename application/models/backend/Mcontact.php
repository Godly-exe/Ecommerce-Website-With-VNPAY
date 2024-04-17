<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcontact extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = $this->db->dbprefix('contact');
	}
    //index
	public function contact_all($limit, $first)
    {
        $this->db->where('trash', 1);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table, $limit, $first);
        return $query->result_array();
    }
    public function contact_count()
    {
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }
    public function contact_update($mydata,$id)
    {
        $this->db->where('id',$id);
        $this->db->update($this->table, $mydata);
    }
    public function contact_status($id)
    {
        $data=array('trash'=>1);
        $this->db->where('id',$id);
        $this->db->update($this->table, $data);
    }
    //detail
    public function contact_detail($id)
    {
        $this->db->where('trash', 1);
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        $data=array('status'=>1);
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
        return $query->row_array();   
    }

    //RECYCLEBIN
    public function contact_trash($limit, $first)
    {
        $this->db->where('trash',0);
        $query = $this->db->get($this->table, $limit, $first);
        return $query->result_array();
    }
    public function contact_trash_count()
    {
        $this->db->where('trash', 0);
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }
    public function contact_restore($id)
    {
        $data=array('trash'=>1);
        $this->db->where('id',$id);
        $this->db->update($this->table, $data);
    }

    //delete vv
    public function contact_delete($id){
        $this->db->where('id',$id);
        $this->db->delete($this->table);
    }
    
}