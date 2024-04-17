<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mcontact extends CI_Model {

	function __construct()
	{
		$this->table=$this->db->dbprefix('contact');
	}
	// lưu liên hệ của khách hàng
	function contact_insert($mydata)
	{
		$this->db->insert($this->table,$mydata);
	}
	

}
