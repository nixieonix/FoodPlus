<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modproduct extends CI_Model {

	public function getproduct()
	{
		$query=$this->db->get('products');
		return $query->result(); // returns results for multiple rows
	}

	function getproductrow($id){
		$this->db->where('id', $id);
		$query=$this->db->get('products');
		return $query->row(); // returns only 1 item or 1 row
	}
}