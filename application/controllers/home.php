<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('product_model');
		$data['product']=$this->product_model->get_products();
		$data['view_page'] = 'home';
		$this->load->view('template', $data);
	}
}