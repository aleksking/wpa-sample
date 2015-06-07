<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!isset($_SESSION)){
	session_start();
}

class Top extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		//$this->load->database();
		$this->load->library('template');
		$this->load->helper(array('form'));

		if(!$this->session->userdata('logged_in')){
			//redirect('/login', 'refresh');
		}
	}

	public function index()
	{
		$data = array(
		    'title' => 'CodeIgniter this is it',
		    'active_menu' => 'home',
		);
		 

		$this->template->load('default', 'index', $data);
	}

	public function user_add() {
		if(isset($this->session->userdata['logged_in'])) {
			$data = array(
			    'title' => 'Add User',
			    'active_menu' => 'home',
			);
			$this->load->helper(array('form'));
			$this->load->library('form_validation');

			$this->form_validation->set_rules('name', 'Username', 'trim|required|xss_clean|min_length[6]|max_length[50]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[8]|max_length[50]');
			$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|xss_clean|min_length[8]|max_length[50]');

			if($_POST) {
				$data['name'] = $this->input->post('name');
				$data['password'] = $this->input->post('password');
				$data['cpassword'] = $this->input->post('cpassword');
				if($this->form_validation->run()) 
				{
					if($this->input->post('password') === $this->input->post('cpassword'))
					{
						$this->load->model('users');
						$exists = $this->users->usernameExists($this->input->post('name'));
						if(!$exists)
						{
							$data = array(
								'name' => $this->input->post('name'),
								'password' => $this->input->post('password'),
								'status' => 1,
								'created_at' => date('Y-m-d h:i:s')
							);
							$this->users->save($data);
							redirect('/users/lists');
						}
						else
						{
							$data['error'] = 'Username is already exists';
						}
					} 
					else 
					{
						$data['error'] = "Both password must matched";
					}
				}
			}
			$this->template->load('default', 'users_add', $data);
		}
	}

	public function user_edit($id) {
		if(isset($this->session->userdata['logged_in'])) {
			$data = array(
			    'title' => 'Edit User',
			    'active_menu' => 'home',
			);
			$this->load->helper(array('form'));
			$this->load->library('form_validation');

			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[8]|max_length[50]');
			
			$this->load->model('users');

			$row = $this->users->getUser($id,'edit');
			if(!$row) {
				redirect('/');
			}
			$data['name'] = $row->name;
			$data['password'] = $row->password;

			if($_POST) {
				if($this->form_validation->run()) 
				{
					$exists = $this->users->usernameExists($this->input->post('name'),'edit',$id);
					if(!$exists)
					{
						$data = array(
							'name' => $this->input->post('name'),
							'password' => $this->input->post('password'),
							'status' => 1,
							'created_at' => date('Y-m-d h:i:s')
						);
						$this->users->update($id,$data);
						redirect('/users/lists');
					}
					else
					{
						$data['error'] = $this->input->post('name').' is already exists';
					} 
				}
			}
			$this->template->load('default', 'user_edit', $data);
		}
	}

	public function user_delete($id) {
		if(isset($this->session->userdata['logged_in'])) {
			$this->load->model('users');
			$this->users->deleteUser($id);
			redirect('/users/lists');
		}
	}

	public function admin_lists($offset = 0) {
		if(isset($this->session->userdata['logged_in'])) {
			$data = array(
			    'title' => 'Admin Lists',
			    'active_menu' => 'home',
			);

			$this->load->library('table');
			$this->load->library('pagination');

			$this->load->model('codegen_model');
			$this->load->model('users');

			$count = $this->users->countUsers();

			$config['base_url'] = base_url().'users/lists';
			$config['total_rows'] = $count;
			$config['per_page'] = 5;

			$data['results'] = $this->codegen_model->get('user','*','status = 1',$config['per_page'],$offset);

			$this->pagination->initialize($config);

			$this->template->load('default', 'admin_lists', $data);
		} else {
			redirect('/');
		}
	}

	public function fees($offset = 0) 
	{
		$login_sess = $this->session->userdata('logged_in');
		if(empty($login_sess)){
			redirect('/login', 'refresh');
		}

		$data = array(
		    'title' => 'Registered Customers',
		    'active_menu' => 'home',
		);

		$this->load->library('table');
		$this->load->library('pagination');

		$this->load->model('codegen_model');

		$config['base_url'] = base_url().'admin';
		$config['total_rows'] = $this->codegen_model->count('registered_fees');
		$config['per_page'] = 100;

		$data['results'] = $this->codegen_model->get('registered_fees','*','',$config['per_page'],$offset);

		$this->pagination->initialize($config);

		$this->template->load('default2', 'fees', $data);
	}


	public function registration()
	{

	$curdate = strtotime(date("Y-m"));
	$activedate = array(
		'early' => ($curdate < strtotime(date("2015-11")))? 'active':'',
		'advance' => ($curdate > strtotime(date("2015-11")) && $curdate < strtotime(date("2016-02")))? 'active':'',
		'onsite' => ($curdate > strtotime(date("2016-02")))? 'active':''
	);

	$rates = array(
		1 => 'P26,100.00 / USD 580',
		2 => 'P29,250.00 / USD 650',
		3 => 'P32,400.00 / USD 720',
		4 => 'P20,250 / USD 450',
		5 => 'P23,400.00 / USD 520',
		6 => 'P26,100.00 / USD 580',
		7 => 'P18,000.00 /USD 400',
		8 => 'P20,250.00 / USD 450',
		9 => 'P23,400.00 / USD 520',
		10 => 'P15,750.00 / USD 350',
		11 => 'P18,000.00 /USD 400',
		12 => 'P20,250.00 / USD 450',
		13 => 'P10,000.00',
		14 => 'P12,000.00',
		15 => 'P14,000.00',
		16 => 'P9,000.00 / USD 200',
		17 => 'P11,250.00 / USD 250',
		18 => 'P13,500.00 /USD 300',
		19 => 'P18,000.00 / USD 400',
		20 => 'P20,250.00 / USD 450',
		21 => 'P22,500.00 / USD 500',
		22 => 'P15,750.00 / USD 350',
		23 => 'P20,250.00 / USD 450',
		24 => 'P23,400.00 / USD 520',
		25 => 'P2,250.00 / USD 50',
		26 => 'P2,250.00 / USD 50',
		27 => 'P2,250.00 / USD 50'
	);

	$rates_php = array(
		1 => '26100.00',
		2 => '29250.00',
		3 => '32400.00',
		4 => '20250',
		5 => '23400.00',
		6 => '26100.00',
		7 => '18000.00',
		8 => '20250.00',
		9 => '23400.00',
		10 => '15750.00',
		11 => '18000.00',
		12 => '20250.00',
		13 => '10000.00',
		14 => '12000.00',
		15 => '14000.00',
		16 => '9000.00',
		17 => '11250.00',
		18 => '13500.00',
		19 => '18000.00',
		20 => '20250.00',
		21 => '22500.00',
		22 => '15750.00',
		23 => '20250.00',
		24 => '23400.00',
		25 => '2250.00',
		26 => '2250.00',
		27 => '2250.00'
	);

	$group_a = array(
		"Andorra",	"Germany",	"Oman",
		"Aruba",	"Greece",	"Poland",
		"Australia",	"Greenland",	"Portugal",
		"Austria",	"Guam",	"Puerto Rico",
		"Bahamas, The",	"Hongkong SAR, China",	"Qatar",
		"Bahrain",	"Hungary",	"San Marino",
		"Barbados",	"Iceland",	"Saudi Arabia",
		"Belgium",	"Ireland",	"Singapore",
		"Bermuda",	"Isle of Man",	"Sint Maarten",
		"Brunei Darussalam",	"Israel",	"Slovak Republic",
		"Canada",	"Italy",	"Slovenia",
		"Cayman Islands",	"Japan",	"Spain",
		"Channel Islands",	"Korea, Rep",	"St Kitts and Nevis",
		"Croatia",	"Kuwait",	"St Martin",
		"Curacao",	"Liechtenstein",	"Sweden",
		"Cyprus",	"Luxembourg",	"Switzerland",
		"Denmark",	"Malta",	"Trinidad and Tobago",
		"Estonia",	"Monaco",	"Turks and Caicos Islands",
		"Faeroe Islands",	"New Celedonia",	"United Kingdom",
		"Finland",	"New Zealand",	"Untied States",
		"France",	"Northern Mariana Islands",	"Virgin Islands (US)",
		"French Polynesia",	"Norway"	
		);

		$group_b = array(
			"Angola",	"Ecuador",	"Palau",
			"Algeria",	"Gabon",	"Panama",
			"American Samoa",	"Grenada",	"Peru",
			"Antigua and Barbuda",	"Iran, Islamic Rep.",	"Romania",
			"Argentina",	"Jamiaca",	"Russian Federation",
			"Azerbaijan",	"Jordan",	"Serbia",
			"Belarus",	"Kazakhstan",	"Seychelles",
			"Bosnia and Herzegovina",	"Latvia",	"South Africa",
			"Botswana",	"Lebanon",	"St. Lucia",
			"Brazil",	"Libya",	"St Vincent and the Grenadines",
			"Bulgaria",	"Lithuania",	"Suriname",
			"Chile",	"Macedonia, FYR",	"Thailand",
			"China",	"Malaysia",	"Tunisia",
			"Colombia",	"Maldives",	"Turkey",
			"Costa Rica",	"Mauritius",	"Turmenistan",
			"Cuba",	"Mexico",	"Tuvalu",
			"Dominica",	"Montenegro",	"Uruguay",
			"Dominican Republic",	"Namibia",	"Venezuela, RB"
		);

		$group_c = array(
			"Albania",	"Indonesia",	"Samoa",
			"Armenia",	"India",	"Sao Tome and Principe",
			"Belize",	"Iraq",	"Senegal",
			"Bhutan",	"Kiribati",	"Solomon Islands",
			"Bolivia",	"Korsovo",	"South Sudan",
			"Cameron",	"Lao PDR",	"Sri Lanka",
			"Cape Verde",	"Lesotho",	"Sudan",
			"Congo Rep",	"Marshall Islands",	"Swaziland",
			"Cote d’ivoire",	"Micronesia, Fed, Sts",	"Syrian Arab Republic",
			"Djibouti",	"Moldova",	"Timor-Leste",
			"Egypt, Arab Rep",	"Mongolia",	"Tonga",
			"El Salvador",	"Morocco",	"Ukraine",
			"Fiji","Nicaragua",	"Uzbekistan",
			"Georgia",	"Nigeria",	"Vanuatu",
			"Ghana",	"Pakistan",	"Vietnam",
			"Guatemala",	"Papua New Guinea","West Bank and Gaza",
			"Guyana",	"Paraguay",	"Yemen, Rep",
			"Honduras",	"Philippines",	"Zambia"
		);

		$group_d = array(
			"Afghanistan",	"Gambia, The",	"Mozambique",
			"Bangladesh",	"Guinea",	"Myanmar",
			"Benin",	"Guinea-Bisau",	"Nepal",
			"Burkina Faso",	"Haiti",	"Niger",
			"Burundi",	"Kenya",	"Rwanda",
			"Cambodia",	"Korea, Dem Rep",	"Sierra Leone",
			"Central African Republic",	"Kyrgyz Republic","Somalia",
			"Chad",	"Liberia",	"Tajikistan",
			"Comoros",	"Madagascar",	"Tanzania",
			"Congo Dem Rep",	"Malawi",	"Tanzania",
			"Eritrea",	"Mali",	"Uganda",
			"Ethiopia",	"Mauritania",	"Zimbabwe",
		);

		$food_diet = array( 
			1 => "Regular",		
			2 => "Muslim",
			3 => "Vegetarian",
		);

		$salutation = array(
			1 => "Dr",		
			2 => "Mr",
			3 => "Ms",
		);
		

		$values = array();

		$layout = 'registration';

		if($this->input->post('pay') && isset($rates[$this->input->post('pay')])){
			$layout = 'customer_form';
		}else{
			$layout = 'registration';
		}
		
		if($this->input->post('pay_no')) {
			$this->load->helper(array('form'));
			$this->load->library('form_validation');

			$this->form_validation->set_rules('salutation', 'Salutation', 'trim|required|xss_clean');
			$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
			$this->form_validation->set_rules('contact_no', 'Contact', 'trim|required|xss_clean|callback__check_phone');
			$this->form_validation->set_rules('food_diet', 'Food Diet', 'trim|required|xss_clean');

			$values = array('salutation' => $this->input->post('salutation'),
						  'first_name' => $this->input->post('first_name'),
						  'last_name' => $this->input->post('last_name'),
						  'email' => $this->input->post('email'),
						  'birthdate' => $this->input->post('birthdate'),
						  'contact' => $this->input->post('contact_no'),
						  'food_diet' => $this->input->post('food_diet'),
						  'pay_no' => $this->input->post('pay_no'),
						  'payment_desc' => $rates[$this->input->post('pay_no')],
						  'amount' => $rates_php[$this->input->post('pay_no')],
						  'address' => $this->input->post('address'),
						  'reg_no' => $this->randcode(),
						);
			$this->load->database();
			$this->load->model('customers','',true);
			if($this->form_validation->run()) {

				if($this->input->post('register_confirm')){
					$saved = $this->customers->register($values);
					if($saved) {
						$this->session->set_userdata('registration_id',$saved);
					}

					$layout = 'to_paypal';
				}

				if($this->input->post('user-data')) 
					$layout = 'register_confirm';
				else if($this->input->post('back')) 
					$layout = 'customer_form';
				
			} else {
				$layout = 'customer_form';
			}
		}

		$data = array(
		    'title' => "Registration",
		    'group_a' => $group_a,
		    'group_b' => $group_b,
		    'group_c' => $group_c,
		    'group_d' => $group_d,
		    'rates' => $rates,
		    'active_menu' => 'registration',
		    'values' => $values,
		    'food_diet' => $food_diet,
		    'salutation' => $salutation,
		    'rates_php' => $rates_php,
		    'activedate' => $activedate
		);

		$this->template->load('default', $layout, $data);
		
	}

	public function register_complete()
	{
		$data = array(
		    'title' => "Registration Complete",
		    'active_menu' => 'registration',
		);
		$this->template->load('default', 'register_complete', $data);
	}

	public function _check_phone($phone)
    {
	   if(preg_match('/[0-9]{7,14}/',$phone))
	    {
	        return true;
	    } else {
            $this->form_validation->set_message('_check_phone', '%s '.$phone.' is invalid format');
            return false;
	    }
    }

	public function proceed_page() {
		$data['title'] = 'Proceed Page';
		$this->template->load('plain', 'proceed_page',$data);
	}

	public function registration_form() {

		$this->template->load('default', 'registration_form', $data);
	}

	public function contact()
	{
		$msg = '';

		if($this->input->post('name') && $this->input->post('tel') && $this->input->post('email') && $this->input->post('message')){
			$to = 'philpsych_org@yahoo.com';
			$headers = 'From: WPA Manila 2016<info@wpamanila2016.com>' . "\r\n";
		    $headers .= "Content-type: text/html; charset=\"UTF-8\"; format=flowed \r\n";
		    $headers .= "Mime-Version: 1.0 \r\n"; 
		    $headers .= "Content-Transfer-Encoding: quoted-printable \r\n";
			$subject = 'Inquiry from wpa website contact page';
			$message = 'Name: '.$this->input->post('name').'<br>'.
					   'Tel: '.$this->input->post('tel').'<br>'.
					   'Email: '.$this->input->post('email').'<br>'.
					   'Message: <br>'.$this->input->post('message').'<br>';

			mail($to, $subject, $message,$headers);
			$msg = '<span style="color:green">Your message was successfully sent.</span>';
		}else if($this->input->post()){
			$msg = '<span style="color:red">All fields are required.</span>';	
		}

		$data = array(
		    'title' => "Contact Us",
		    'msg'	=> $msg,
		    'active_menu' => 'congress',
		);
		$this->template->load('default', 'contact', $data);
	}

	public function congress()
	{
		$data = array(
		    'title' => "Congress Information ",
		    'active_menu' => 'congress',
		);
		$this->template->load('default', 'congress', $data);
	}

	public function venue()
	{
		$data = array(
		    'title' => "Venue",
		    'active_menu' => 'congress',
		);
		$this->template->load('default', 'venue', $data);
	}

	public function committees()
	{
		$data = array(
		    'title' => "Committees",
		    'active_menu' => 'congress',
		);
		$this->template->load('default', 'committees', $data);
	}

	public function credit_card()
	{
		$data = array(
		    'title' => "Credit Card Payments",
		    'active_menu' => 'registration',
		);
		$this->template->load('default', 'credit_card', $data);
	}

	public function refund_policy()
	{
		$data = array(
		    'title' => "Refund Policy",
		    'active_menu' => 'registration',
		);
		$this->template->load('default', 'refund_policy', $data);
	}

	public function programme()
	{
		$data = array(
		    'title' => "Programme",
		    'active_menu' => 'programme',
		);
		$this->template->load('default', 'programme', $data);
	}

	public function accommodation()
	{
		$data = array(
		    'title' => "Accommodation",
		    'active_menu' => 'accommodation',
		);
		$this->template->load('default', 'accommodation', $data);
	}

	public function about_philippines()
	{
		$data = array(
		    'title' => "It's More Fun in the Philippines",
		    'active_menu' => 'home',
		);
		$this->template->load('default', 'about_philippines', $data);
	}

	public function sponsorship()
	{
		$data = array(
		    'title' => "Sponsorship and Accommodation",
		    'active_menu' => 'sponsorship',
		);
		$this->template->load('default', 'sponsorship', $data);
	}

	 function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('/login', 'refresh');
	}

	private function randcode(){
		$seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789');
		$rand = '';
		foreach (array_rand($seed, 12) as $k) $rand .= $seed[$k];

		return $rand;
	}

}
