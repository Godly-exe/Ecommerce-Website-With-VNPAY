<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcustomer extends CI_Model {

	public function __construct(){
        parent::__construct();
        $this->table = $this->db->dbprefix('customer');
    }

    function customer_login($username, $password){
    	$this->db->where('username', $username);
        $this->db->or_where('email', $username);
    	$this->db->where('password', $password);
    	$query = $this->db->get($this->table);
        if(count($query->result_array())==1){
        	return $query->row_array();
        }else{
        	return FALSE;
        }	
    }

    function customer_detail_email($email){
        $this->db->where('email', $email);
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }
    // ly lai mk
    function customer_detail_id($id){
        $this->db->where('id', $id);
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }

    function customer_check_username($username){
        $this->db->where('username', $username);
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $query=$this->db->get($this->table);
        return $query->result_array();
    }

    public function customer_insert($data){
        $this->db->insert($this->table, $data);
    }
     public function customer_update($data,$id){
        $this->db->where('id',$id);
        $this->db->update($this->table, $data);
    }

    // kiểm tra id cần lấy lại có đúng với mail ko
    function customer_check_id_email($id, $email){
        $this->db->where('id', $id);
        $this->db->where('email', $email);
        $query = $this->db->get($this->table);
        if(count($query->result_array())==1){
            return $query->row_array();
        }else{
            return FALSE;
        }   
    }

}