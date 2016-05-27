<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('modproduct', 'prod');
	}

	public function index()
	{
		//
		$data['row'] = $this->prod->getproduct();
		$this->load->view('index', $data);
	}

	function add(){
		$this->load->view('add');
	}

	function save(){
		$data=array(
			'name'=>$this->input->post('textname'),
			'description'=>$this->input->post('textdesc'),
			'production_date'=>$this->input->post('textproddate'),
			'expiry_date'=>$this->input->post('textexpdate'),
			'price'=>$this->input->post('texprice'),
			'currency'=>$this->input->post('textcurr'),
			'ean_code'=>$this->input->post('textean'),
			'weight'=>$this->input->post('textweigth'),
			'weight_unit'=>$this->input->post('textweightuni'));
		$this->db->insert('products', $data);
		redirect('product/index');
	}

	function edit($id){
		$data['r'] = $this->prod->getproductrow($id);
		$this->load->view('edit', $data);
	}

	function saveupdate(){
		$id= $this->input->post('textid');
		$data=array(
			'name'=>$this->input->post('textname'),
			'description'=>$this->input->post('textdesc'),
			'production_date'=>$this->input->post('textproddate'),
			'expiry_date'=>$this->input->post('textexpdate'),
			'price'=>$this->input->post('texprice'),
			'currency'=>$this->input->post('textcurr'),
			'ean_code'=>$this->input->post('textean'),
			'weight'=>$this->input->post('textweigth'),
			'weight_unit'=>$this->input->post('textweightuni'));
		$this->db->where('id', $id);
		$this->db->update('products', $data);
		redirect('product/index');
	}

	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('products');
		redirect('product/index');
	}
}