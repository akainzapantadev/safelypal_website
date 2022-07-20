<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['robots.txt'] = 'main/robots';
$route['sitemap.xml'] = 'main/sitemap';
$route['main/subscribe'] = 'main/subscribe';

// blogs
$route['blogs'] = 'main/blogs';
  // blog posts
  $route['blogs/newest-crypto-wallet'] = 'main/newestcryptowallet';
  $route['blogs/tips-on-crypto-trading'] = 'main/tipsoncryptotrading';
  $route['blogs/the-key-to-web-3.0'] = 'main/thekeytoweb3';
  $route['blogs/best-crypto-wallet-2022'] = 'main/bestcryptowallet2022';

$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;