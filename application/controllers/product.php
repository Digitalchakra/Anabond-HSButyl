<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

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
		$pid = ($this->uri->segment(3)) ? $this->uri->segment(3) : NULL;
		$this->load->model('product_model');
		$data['product']=$this->product_model->get_products();
		if(isset($data['product'][0]))
		{
			if($pid)
			{
				foreach($data['product'] as $key=>$row)
			   {
				  if ( $row['id'] === $pid )
					{
						//$data['product_head']=$data['product'][$key];
						$data['product_head']['name']='PRODUCTS';
						$data['product_first']=$data['product'][$key];
						break;
					}
					 //$i++;
			   }
			}
			else
			{
				//$data['product_head']=$data['product'][0];
				$data['product_head']['name']='PRODUCTS';
				$data['product_first']=$data['product'][0];
			}
			$data['view_page'] = 'product';
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