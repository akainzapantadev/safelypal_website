<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['robots.txt'] = 'main/robots';
$route['sitemap.xml'] = 'main/sitemap';

$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// main
$route['about'] = 'main/about';
$route['contact'] = 'main/contact';
$route['about'] = 'main/about';
$route['main/subscribe'] = 'main/subscribe';
$route['main/insertContactUs'] = 'main/insertContactUs';

// blogs
$route['blogs'] = 'blogs/blogs';
$route['admin-blogs'] = 'blogs/adminBlogs';
$route['addBlog'] = 'blogs/addBlog';
$route['updateBlog'] = 'blogs/updateBlog';
$route['deleteBlog'] = 'blogs/deleteBlog';
$route['countBlogs'] = 'blogs/countBlogs';
$route['getUrls'] = 'blogs/getUrls';
$route['getBlog'] = 'blogs/getBlog';
$route['checkIfBlogExist'] = 'blogs/checkIfBlogExist';

$route['blogs/(:any)'] = 'blogs/blogLoad/$1';