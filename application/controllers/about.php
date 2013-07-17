<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	/**
	 * About Page for this controller.
	 */
	function __construct()
	 {
	   parent::__construct();
	   $this->load->helper('url');
	 }
	public function index()
	{
		$data['view_page'] = 'about';
		$this->load->view('template', $data);
	}
}