<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Captcha extends CI_Controller {

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
			//$words = file("./captcha_txt/google_captcha.txt"); 
			$word = rand(0,9999);
			$vals = array(
					'img_path' => './tmp/captcha/',
					'word' =>$word,
					'img_url' => base_url().'tmp/captcha/',
					'font_path' =>'./assets/fonts/arialbd.ttf',
					'expiration' => '3600',
					'img_width' => '100'
					);

				$data['captcha'] = create_captcha($vals);
			$this->session->set_userdata('captchaWord', $data['captcha']['word']);
			$output['resultset']=$data;
			$this->load->view('json', $output);
	}
}
?>