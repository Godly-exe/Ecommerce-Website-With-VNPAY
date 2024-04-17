<?php
class Minfocustomer extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->db->dbprefix('customer');
    }

     //Thông tin khách hàng
    public function customer_detail_id($id){
        $this->db->where('id', $id);
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $query = $this->db->get('db_customer');
        return $query->row_array();
    }
    public function order_orderid($id) {
        $this->db->where('id', $id);
        $this->db->where('trash', 1);
        $this->db->order_by('orderdate', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('db_order');
        return $query->row_array(); 
    } 

    public function orderdetail_order_join_product($id){
        $this->db->select('*');
        $this->db->from('db_orderdetail or');
        $this->db->where('or.orderid',$id);
        $this->db->join('db_product pr','pr.id = or.productid');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function order_listorder_customerid_not($customerid){
        $this->db->where('customerid', $customerid);
        $this->db->where('status', 0);
        $this->db->where('trash', 1);
        $this->db->order_by('orderdate', 'desc');
        $query = $this->db->get('db_order');
        return $query->result_array();
    }  
    public function order_listorder_customerid($customerid){
        $this->db->where('customerid', $customerid);
        $this->db->where('status!=', 0);
        $this->db->where('trash', 1);
        $this->db->order_by('orderdate', 'desc');
        $query = $this->db->get('db_order');
        return $query->result_array();
    }  
}