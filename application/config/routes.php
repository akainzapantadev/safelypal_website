<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['robots.txt'] = 'main/robots';
$route['sitemap.xml'] = 'main/sitemap';
$route['main/subscribe'] = 'main/subscribe';

// blogs
$route['blogs'] = 'main/blogs';
  // blog posts
  $route['blogs/newestcryptowallet'] = 'main/newestcryptowallet';
  $route['blogs/tipsoncryptotrading'] = 'main/tipsoncryptotrading';
  $route['blogs/thekeytoweb3'] = 'main/thekeytoweb3';
  $route['blogs/bestcryptowallet2022'] = 'main/bestcryptowallet2022';

$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;