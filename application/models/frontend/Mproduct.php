<?php
class Mproduct extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->db->dbprefix('product');
    }

    public function checkNumberProduct($id, $sl)
    {     
        $query = "SELECT * FROM db_product WHERE id = ? AND number >= ?";
        $result = $this->db->query($query, array($id, $sl));
        return $result->result_array();   
    }

    public function product_detail_update($id)
    {     
        $this->db->where('trash', 1);
        $this->db->where('id', $id);
        $this->db->limit(1);
        $query = $this->db->get($this->table);
        return $query->result_array();   
    }

    public function Khachang_sanpham_update($id, $mydata){
        $this->db->where('id', $id);
        return $this->db->update($this->table, $mydata);
    }

    public function Khachhang_post($mydata){
        return $this->db->insert($this->table,$mydata);
    }

    //Trang chủ
    public function product_home_limit($listcat, $limit)
    {
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $this->db->group_start();
        foreach ($listcat as $value) {
            $this->db->or_where('catid', $value);
        }
        $this->db->group_end();
        $this->db->limit($limit);
        $this->db->order_by('id', 'asc');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
    // Sản phẩm
    public function product_sanpham($limit,$first,$f,$od)
    {       
        $this->db->where('trash', 1);
        $this->db->order_by($f, $od);
        $query = $this->db->get($this->table, $limit,$first);
        return $query->result_array();
    }

    public function product_sanpham_count()
    {
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }

    // Sản phẩm theo loại
    public function product_list_cat_limit($listcat, $limit,$first,$f,$od)
    {
        $this->db->where('trash', 1);
        $this->db->group_start();
        //$d=0;
        foreach ($listcat as $value) {
            $this->db->or_where('catid', $value);
        }
        $this->db->group_end();
        $this->db->order_by($f, $od);
        $query = $this->db->get($this->table, $limit,$first);
        return $query->result_array();
    }


    public function product_chude_count($listcat)
    {
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $dem=0;
        foreach ($listcat as $value) {
            if($dem==0)
            {
                    $this->db->where('catid', $value);
            }
            else
            {
                   $this->db->or_where('catid', $value); 
            }
            $dem++;
        }
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }
    // Left- sản phẩm sale
    public function product_sale($limit)
    {
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $this->db->limit($limit);
        $this->db->order_by('sale', 'desc');
        $this->db->order_by('modified', 'desc');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
    // sản phẩm bán chạy
    public function product_selling($limit)
    {
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $this->db->limit($limit);
        $this->db->order_by('number_buy', 'desc');
        $this->db->order_by('created', 'desc');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
    // Trang chi tiết sp
    public function product_detail($link)
    {     
        $this->db->where('trash', 1);
        $this->db->where('alias', $link);
        $this->db->limit(1);
        $query = $this->db->get($this->table);
        return $query->row_array();   
    }

    public function product_cungloai($catid, $id, $limit)
    {
        $this->db->where('catid', $catid);
        $this->db->where('id !=', $id);
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $this->db->limit($limit);
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
    // Trang tìm kiếm
    public function product_search($name,$limit,$first){
        $this->db->like('name', $name);
        $this->db->where('trash', 1);
        $this->db->order_by('created', 'desc');
        $query = $this->db->get($this->table,$limit,$first);
        return $query->result_array();
    }

    public function product_search_count($name){
        $this->db->like('name', $name);
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $this->db->order_by('created', 'desc');
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }
    // icon giỏ hàng
    public function product_detail_id($id)
    { 
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $this->db->where('id', $id);
        $this->db->limit(1);
        $query = $this->db->get($this->table);
        return $query->row_array();   
    }
    //zend_search
    public function get_product()
    { 
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function get_product_KH($id){
        $this->db->where('trash', 1);
        $this->db->where('idcustomer', $id);
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function get_detail_product_kh($id){
        $this->db->select('db_product.*, db_category.id, db_category.name AS catename');
        $this->db->from('db_product');
        $this->db->join('db_category', 'db_product.catid = db_category.id');
        $this->db->where('db_product.trash', 1);
        $this->db->where('db_product.status', 1);
        $this->db->where('db_product.id', $id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function product_update($mydata,$id)
    {
        $this->db->where('id',$id);
        $this->db->update($this->table, $mydata);
    }
}
