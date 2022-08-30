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
$route['main/getPin'] = 'main/getPin';
$route['main'] = 'main';



// library
$route['upload_view'] = 'library/upload';
$route['upload_file'] = 'library/upload/do_upload';

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
$route['admin/loadFaq'] = 'admin/loadFaq';
$route['uploadBlogImage'] = 'main/uploadBlogImage';
$route['deleteBlogImageBeforeUpdatingBlogDetails'] = 'blogs/deleteBlogImageBeforeUpdatingBlogDetails';


$route['blogs/(:any)'] = 'blogs/blogLoad/$1';