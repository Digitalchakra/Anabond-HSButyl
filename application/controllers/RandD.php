<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RandD extends CI_Controller {

	/**
	 * Home Page for this controller.
	 */
	function __construct()
	 {
	   parent::__construct();
	   $this->load->helper('url');
	 }
	public function index()
	{
		$data['view_page'] = 'RandD';
		$this->load->view('template', $data);
	}
}