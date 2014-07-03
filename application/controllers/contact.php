<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

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
		$this->load->model('feedback_model');
		$this->load->model('product_model');
		$data['view_page'] = 'contact';
		$data['msg']=NULL;
		$data['success']=-1;
		
		if(isset($_POST['submit_feedback']))
		{
				$this->form_validation->set_rules('name', 'Name', 'trim|max_length[30]|min_length[3]');
				$this->form_validation->set_rules('email', 'Email/Phone', 'trim|required|max_length[100]');
				//$this->form_validation->set_rules('phone', 'Phone', 'trim|max_length[17]|callback_phone_check');
				$this->form_validation->set_rules('company', 'Company', 'trim|max_length[100]');
				$this->form_validation->set_rules('message', 'Message', 'trim|max_length[1000]');
				$this->form_validation->set_rules('captcha', "Captcha", 'required|callback_captcha_check');
				if($this->form_validation->run() ==FALSE)
				{
					$err['name'] = form_error('name');
					$err['email'] = form_error('email');
					//$err['phone'] = form_error('phone');
					$err['company'] = form_error('company');
					$err['message'] = form_error('message');
					$err['captcha'] = form_error('captcha');
					$data['err']=$err;
				}
				else
				{
					$data['success']=0;
					$name=$this->input->post('name');
					$email=$this->input->post('email');
					//$phone=$this->input->post('phone');
					$company=$this->input->post('company');
					$message=$this->input->post('message');
					$product=$this->input->post('pname');

					$values=array(
						'name' => $name,
						'email' => $email,
						//'phone' => $phone,
						'company' => $company,
						'message' => $message,
						'product' => $product
					);
					$result=$this->feedback_model->add_feedback($values);	// Insert feedback to database
					if($result)
					{
						$data['success']=1;
						$data['msg']='Thank you, we will get back to you shortly.';

						//Mail Configuration
						$this->load->library('email');
						$config['charset'] = 'iso-8859-1';
						$config['wordwrap'] = TRUE;
						$config['mailtype']='html';
						$this->email->initialize($config);
						$this->email->from('marketing@anabondhsbutyl.com', 'Digitalchakra');

					/*	//Write mail to user
						$this->email->subject('Thank your for your feedback - EZCV');
						$content= 'Dear User<br /><br />Thank you for your feedback on EZCV. Your feedback help us to improve. We will contact you if necessary.<br /><br />Regards<br />EZCV';
						$this->email->to();
						$this->email->message($content);
						$this->email->send();
	*/
						//Write mail to support
						$this->email->subject('New Feedback from Hsbutyl');
						$content2= 'Dear Admin<br />
						<br />New feedback submitted on Hsbutyl.<br />
						<br />Feedback Details:<br />
						Name: '.$name.'<br />
						Email / Phone: '.$email.'<br />
						Company: '.$company.'<br />
						Product: '.$product.'<br />
						Message: '.$message.'<br /><br />';
						//$this->email->to('manimani1014@gmail.com');
						//$this->email->to('aditya@digitalchakra.in');
						$this->email->to('marketing@anabondhsbutyl.com');
						$this->email->message($content2);
						$this->email->send();

					}
					else
					{
						$data['msg']='Internal error. Please try again later.';
					}
				}
				$output['resultset']=$data;
				$this->load->view('json', $output);
		}
		else
		{
			if(isset($_POST['product_name']) && ($_POST['product_name']))
	
			{
				$data['product_name']=$_POST['product_name'];
				$data['product_image']=$_POST['product_image'];
			}
			$data['product']=$this->product_model->get_products();
			$this->load->view('template', $data);
		}
	}
	function captcha_check()
	{
		if(strtolower($this->input->post('captcha')) == $this->session->userdata('captchaWord'))
		
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('captcha_check', 'Captcha word mismatch.');
			return false;
		}
	}
	function phone_check()
	{
		$mobile=$this->input->post('phone');
		$pattern='/^[0-9 \-+]{0,17}$/';
		if (preg_match($pattern, $mobile))
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('phone_check', 'Phone should contail number, "+" and "-" only.');
			return false;
		}
	}
}
