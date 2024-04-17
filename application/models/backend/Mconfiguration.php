<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mconfiguration extends CI_Model {

	public function __construct()
    {
            parent::__construct();
            $this->table = $this->db->dbprefix('config');
    }
    public function config_price_ship(){
        $query = $this->db->get($this->table);
        $row=$query->row_array();
        return $row['priceShip'];
    }
    public function configuration_detail($id)
    {
       $id=1;
        //$this->db->where('id', $id=1);
        $query = $this->db->get($this->table);
        return $query->row_array();   
    }

    //Cập nhật
    public function configuration_update($mydata,$id)
    {
        $this->db->where('id',$id);
        $id=1;
        $this->db->update($this->table, $mydata);
    }
   
}

/* End of file mconfiguration.php */
/* Location: ./application/models/mconfiguration.php */