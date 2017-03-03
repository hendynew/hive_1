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

$route['home/index'] = 'main/index';
$route['home/sendmail'] = 'main/sendmail';
$route['home/about'] = 'main/about';
$route['home/blog'] = 'main/blog';
$route['home/contact'] = 'main/contact';
$route['home/subscribe'] = 'main/subscribe';
$route['home/view_blog/(:any)'] = 'main/view_blog/$1';
$route['home/view_blog'] = 'main/view_blog/1';


$route['index'] = 'main/index';
$route['sendmail'] = 'main/sendmail';
$route['about'] = 'main/about';
$route['blog'] = 'main/blog';
$route['contact'] = 'main/contact';
$route['subscribe'] = 'main/subscribe';
$route['view_blog/(:any)'] = 'main/view_blog/$1';
$route['view_blog'] = 'main/view_blog/1';

$route['videos'] = 'main/videos';

//------ Control Panel -------------//

$route['cp'] = 'controlpanel/index';
$route['cp/blog'] = 'controlpanel/blog';
$route['cp/blog/(:any)'] = 'controlpanel/view_blog/$1';
$route['cp/new_blog'] = 'controlpanel/new_blog';
$route['cp/submitnewblog'] = 'controlpanel/submit_blog/insert';
$route['submitupdateblog'] = 'controlpanel/submit_blog/update';
$route['activateBlog'] = 'controlpanel/activate_blog';

$route['cp/account'] = 'controlpanel/account';
$route['cp/update/account'] = 'controlpanel/update_account';

$route['cp/about'] = 'controlpanel/about';
$route['cp/update/about'] = 'controlpanel/update_about';

$route['home'] = 'main/index';
$route['login'] = 'controlpanel/login';
$route['logout'] = 'controlpanel/logout';

$route['cp/update/home'] = 'controlpanel/update_home';
$route['cp/update/partner'] = 'controlpanel/update_partner';
$route['cp/update/fitur'] = 'controlpanel/update_fitur';
$route['cp/update/hero_blog'] = 'controlpanel/update_hero_blog';
$route['cp/update/video'] = 'controlpanel/update_video';

$route['cp/newsletter'] = 'controlpanel/newsletter';
$route['cp/sendNewsletter'] = 'controlpanel/sendNewsletter';

$route['cp/videos'] = 'controlpanel/videos';
$route['cp/videos/(:num)'] = 'controlpanel/view_video/$1';
$route['cp/new_video'] = 'controlpanel/new_video';
$route['cp/add_video'] = 'controlpanel/add_video';
$route['cp/videos/update_video'] = 'controlpanel/update_videos';
$route['cp/videos/activate'] = 'controlpanel/update_videos';
$route['cp/videos/deactivate'] = 'controlpanel/update_videos';

//---------------------------------//


//-----------------API

$route['selectposts'] = 'api/select_post';
