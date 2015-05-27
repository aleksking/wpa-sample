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
		);
		 

		$this->template->load('default', 'index', $data);
	}

	public function registration()
	{

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

		$data = array(
		    'title' => "Registration",
		    'group_a' => $group_a,
		    'group_b' => $group_b,
		    'group_c' => $group_c,
		    'group_d' => $group_d,
		    'rates' => $rates,
		);
		
		if($this->input->post('pay') && isset($rates[$this->input->post('pay')])){
			$this->template->load('default', 'registration_confirm', array('rates' => $rates,'pay' => $this->input->post('pay')));
		}else{
			$this->template->load('default', 'registration', $data);
		}
		
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

	public function venue()
	{
		$data = array(
		    'title' => "Venue",
		);
		$this->template->load('default', 'venue', $data);
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

	public function accommodation()
	{
		$data = array(
		    'title' => "Accommodation",
		);
		$this->template->load('default', 'accommodation', $data);
	}

	public function about_philippines()
	{
		$data = array(
		    'title' => "It's More Fun in the Philippines",
		);
		$this->template->load('default', 'about_philippines', $data);
	}

	public function sponsorship()
	{
		$data = array(
		    'title' => "Sponsorship and Accommodation",
		);
		$this->template->load('default', 'sponsorship', $data);
	}

	 function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('/login', 'refresh');
	}

}
