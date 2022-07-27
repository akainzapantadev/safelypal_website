<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['robots.txt'] = 'main/robots';
$route['sitemap.xml'] = 'main/sitemap';
$route['main/subscribe'] = 'main/subscribe';

$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// blogs
$route['blogs'] = 'blogs/blogs';
$route['admin-blogs'] = 'blogs/adminBlogs';
$route['addBlog'] = 'blogs/addBlog';


$route['blogs/(:any)'] = 'blogs/blogLoad/$1';
  