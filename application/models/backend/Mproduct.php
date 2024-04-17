<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mproduct extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = $this->db->dbprefix('product');
	}
    //index
	public function product_sanpham_count()
    {
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }
    public function product_sanpham($limit,$first)
    {
        $sql = "SELECT db_product.*, db_customer.id AS cId, db_customer.fullname FROM `db_product` LEFT JOIN db_customer ON db_product.idcustomer = db_customer.id WHERE db_product.trash = 1 ORDER BY db_product.id DESC LIMIT ?, ?";
        $query = $this->db->query($sql, array($first,$limit));
        return $query->result_array();
    }
    //detail
	public function product_detail($id)
    {
        $this->db->where('trash', 1);
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row_array();   
    }

    //RECYCLEBIN
    public function product_trash_count()
    {
        $this->db->where('trash', 0);
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }
	public function product_trash($limit, $first)
	{
		$this->db->where('trash',0);
		$query = $this->db->get($this->table, $limit, $first);
        return $query->result_array();
	}
    public function product_restore($id)
    {
        $data=array('trash'=>1);
        $this->db->where('id',$id);
        $this->db->update($this->table, $data);
    }
	//Thêm
	public function product_insert($mydata)
	{
		$this->db->insert($this->table,$mydata);
	}
    //Sửa
	public function product_update($mydata,$id)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table, $mydata);
	}
    //Xóa
	public function product_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
    //Category
    public function product_count_parentid($catid)
    {
        $this->db->where('catid', $catid);
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }

    // tìm kiếm nhanh
    public function get_data_search($query)
    {
        $this->db->select("*");
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
        $this->db->from($this->table);
        if($query != '')
        {
            $this->db->like('name', $query);
        }
        $this->db->order_by('id', 'desc');
        return $this->db->get();
    }

    public function searchProduct($tenSanPham){
        $tenSanPham = "%".$tenSanPham."%";
        $sql = "SELECT db_product.id,db_product.avatar,db_product.name,db_product.number,db_category.name AS catname,db_product.status FROM db_product, db_category WHERE db_product.catid = db_category.id AND db_product.name LIKE '".$tenSanPham."' LIMIT 10";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function product_delete_detail($id){
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

}