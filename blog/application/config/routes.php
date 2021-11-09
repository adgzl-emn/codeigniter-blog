<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'anasayfa';
$route['bloglar/(:any)'] = 'anasayfa/bloglar/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
