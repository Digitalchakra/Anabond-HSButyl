<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Market extends CI_Controller {

	/**
	 * Home Page for this controller.
	 */
	function __construct()
	 {
	   parent::__construct();
	   $this->load->helper('url');
	   $this->load->database();
	 }
	public function index()
	{
		$mid = ($this->uri->segment(3)) ? $this->uri->segment(3) : NULL;
		$this->load->model('market_model');
		$this->load->model('product_model');
		$market = $this->market_model->get_market($mid);
		$data['product_head']=$market[0];
		$data['product']=$this->product_model->get_products($mid);
		if(isset($data['product'][0]))
		{
			$data['product_first']=$data['product'][0];
			$data['view_page'] = 'product';
			$data['parents']=$this->product_model->get_parents($data['product'][0]['id']);
		}
		else
		{
			$data['view_page'] = 'uc';
		}
		$this->load->view('template', $data);
	}
	public function json_list()
	{
		$mid = ($this->uri->segment(3)) ? $this->uri->segment(3) : NULL;
		$this->load->model('product_model');
		if($mid)
		{
			$data['resultset']['product']=$this->product_model->get_products($mid);
		}
		else
		{
			$data['resultset']['product']=$this->product_model->get_products();
		}
		$this->load->view('json', $data);
	}
}