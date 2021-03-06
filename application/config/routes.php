<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = '';

// routes to the zzz function in first.php
$route['sleep'] = 'first/zzz';

// routes to shucks function in welcome.php
$route['lock/(.*)'] = 'welcome/shucks';

// routes to gimme function in first.php
$route['show/(:num)'] = 'first/gimme/3';

// routes to guess.php
$route['dunno'] = 'guess';

// routes to bingo.php when any 4 digits are added infront of bingo
$route['([a-zA-Z]{4})/bingo'] = 'bingo';

// routes to wisdom funtion in bingo.php when comp+any 4 digits is used
$route['(comp\d{4})/(.*)'] = 'bingo/wisdom';


/* End of file routes.php */
/* Location: ./application/config/routes.php */