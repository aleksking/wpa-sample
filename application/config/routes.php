<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "top";
$route['about_philippines'] = "top/about_philippines";
$route['contact'] = "top/contact";
$route['registration'] = "top/registration";
/*$route['users/lists'] = "top/admin_lists";
$route['users/lists/(:any)'] = "top/admin_lists/$1";
$route['users/add'] = "top/user_add";
$route['users/edit/(:any)'] = "top/user_edit/$1";
$route['users/delete/(:any)'] = "top/user_delete/$1";*/
$route['admin'] = "top/fees";
$route['admin/(:any)'] = "top/fees/$1";
$route['registration/confirm'] = "top/proceed_page";
$route['registration_form'] = "top/registration_form";
$route['congress'] = "top/congress";

$route['register_complete'] = "top/register_complete";


$route['programme'] = "top/programme";
$route['venue'] = "top/venue";
$route['accommodation'] = "top/accommodation";
$route['programme'] = "top/programme";
$route['sponsorship'] = "top/sponsorship";

$route['refund_policy'] = "top/refund_policy";
$route['logout'] = "top/logout";
$route['404_override'] = 'top/index';
