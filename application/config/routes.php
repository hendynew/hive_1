<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

//------ Main Blog -------------//

$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['index'] = 'main/index';
$route['sendmail'] = 'main/sendmail';
$route['about'] = 'main/about';
$route['blog'] = 'main/blog';
$route['contact'] = 'main/contact';
$route['subscribe'] = 'main/subscribe';
$route['monthblog_refresh/(:num)'] = 'main/monthblog_refresh';
$route['blog/(:num)'] = 'main/blog/$1';
$route['view_blog/(:any)'] = 'main/view_blog/$1';
$route['view_blog'] = 'main/view_blog/1';


//------ Control Panel -------------//

$route['cp'] = 'controlpanel/index';
$route['cp/blog'] = 'controlpanel/blog';
$route['cp/new_blog'] = 'controlpanel/new_blog';
$route['cp/submitnewblog'] = 'controlpanel/submitnewblog';


$route['home'] = 'controlpanel/home';
$route['login'] = 'controlpanel/login';
$route['logout'] = 'controlpanel/logout';

$route['cp/update/home'] = 'controlpanel/update_home';
$route['cp/update/partner'] = 'controlpanel/update_partner';
$route['cp/update/fitur'] = 'controlpanel/update_fitur';
$route['cp/update/hero_blog'] = 'controlpanel/update_hero_blog';

//---------------------------------//