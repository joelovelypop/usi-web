<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'homepage';
$route['detail'] = "detail/index/$1";
$route['detail/(:any)'] = "detail/index/$1";
$route['cat'] = "cat/index/$1";
$route['cat/(:any)'] = "cat/index/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;








