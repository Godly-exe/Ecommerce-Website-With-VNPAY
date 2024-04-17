<?php  
 class Mcrud extends CI_Model  
 {  
      var $table = "customer";  
      var $select_column = array("id", "fullname", "email", "phone");  
      var $order_column = array(null, "fullname", "email", null, null);  
      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("fullname", $_POST["search"]["value"]);  
                $this->db->or_like("email", $_POST["search"]["value"]);
                $this->db->or_like("phone", $_POST["search"]["value"]);  
                $this->db->where('status', 1);
        $this->db->where('trash', 1);
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function make_datatables(){  
        $this->db->where('status', 1);
        $this->db->where('trash', 1);
           $this->make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function get_filtered_data(){ 
           $this->make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data()  
      {  
           $this->db->select("*");
           $this->db->where('trash', 1);
           $this->db->from($this->table);  
           return $this->db->count_all_results();  
      }  
 }  