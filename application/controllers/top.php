<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!isset($_SESSION)){
	session_start();
}

class Top extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library('template');

		if(!$this->session->userdata('logged_in')){
			//redirect('/login', 'refresh');
		}
	}

	public function index()
	{
		$data = array(
		    'title' => 'CodeIgniter this is it',
		);
		 

		$this->template->load('default', 'index', $data);
	}

	public function registration()
	{
		$data = array(
		    'title' => "Registration",
		);
		$this->template->load('default', 'registration', $data);
	}

	public function contact()
	{
		$data = array(
		    'title' => "Contact Us",
		);
		$this->template->load('default', 'contact', $data);
	}

	public function congress()
	{
		$data = array(
		    'title' => "Congress Information ",
		);
		$this->template->load('default', 'congress', $data);
	}

	public function committees()
	{
		$data = array(
		    'title' => "Committees",
		);
		$this->template->load('default', 'committees', $data);
	}

	public function credit_card()
	{
		$data = array(
		    'title' => "Credit Card Payments",
		);
		$this->template->load('default', 'credit_card', $data);
	}

	public function refund_policy()
	{
		$data = array(
		    'title' => "Refund Policy",
		);
		$this->template->load('default', 'refund_policy', $data);
	}

	public function programme()
	{
		$data = array(
		    'title' => "Programme",
		);
		$this->template->load('default', 'programme', $data);
	}

	public function about_philippines()
	{
		$data = array(
		    'title' => "It's More Fun in the Philippines",
		);
		$this->template->load('default', 'about_philippines', $data);
	}

	 function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('/login', 'refresh');
	}

}
