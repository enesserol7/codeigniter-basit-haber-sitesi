<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'anasayfa';
$route['anasayfa/(:num)'] = 'anasayfa';
$route['anasayfa/(:any)'] = 'anasayfa/$1';
$route['siyasetdetay/(:any)'] = 'anasayfa/siyasetdetay/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
