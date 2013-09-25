<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SearchResult extends CI_Controller {

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
		$data['view_page'] = 'searchResult';
		$this->load->view('template', $data);
		}
}
?>