<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	/**
	 * Home Page for this controller.
	 */
	function __construct()
	 {
	   parent::__construct();
	  $this->load->helper(array('form', 'url', 'captcha'));
	   $this->load->library(array('form_validation', 'session'));
	   $this->load->database();
	 }
	public function index()
	{
		$pid = ($this->uri->segment(3)) ? $this->uri->segment(3) : NULL;
		$this->load->model('product_model');
		$data['product']=$this->product_model->get_products();
		$data['product_head']['name']='PRODUCTS';
		$data['selectedID'] = NULL;
		if(isset($data['product'][0]))
		{
			if($pid)
			{
				$found=0;
				foreach($data['product'] as $key=>$row)
			   {
				  if ( $row['id'] === $pid )
					{
						$found=1;
						$data['product_first']=$data['product'][$key];
						$data['selectedID'] = 1;
						$data['parents']=$this->product_model->get_parents($pid);
						$data['view_page'] = 'product';
						break;
					}
			   }
			   if(!$found)
			   {
				   $data['view_page'] = 'uc';
			   }
			}
			else
			{
				$data['product_first']=$data['product'][0];
				$data['parents']=$this->product_model->get_parents($data['product'][0]['id']);
				$data['view_page'] = 'product';
			}
		}
		else
		{
			$data['view_page'] = 'uc';
		}
		$this->load->view('template', $data);
		/*$this->load->model('product_model');
		$data['product']=$this->product_model->get_product();
		echo "<pre>";
		print_r($data);
		*/
	}
	public function json_product()
	{
		$pid = ($this->uri->segment(3)) ? $this->uri->segment(3) : NULL;
		$this->load->model('product_model');
		if($pid)
		{
			$data['resultset']['product']=$this->product_model->get_product($pid);
			$data['resultset']['parents']=$this->product_model->get_parents($pid);
			$this->load->view('json', $data);
		}
		
	}
}