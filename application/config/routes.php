<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['arldev'] = 'main/arldev';
$route['livetest'] = 'main/livetest';

$route['robots.txt'] = 'main/robots';
$route['sitemap.xml'] = 'main/sitemap';

$route['default_controller'] = 'main/livetest';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;