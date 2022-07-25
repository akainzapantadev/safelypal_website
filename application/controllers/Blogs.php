<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blogs extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function blogs()
	{

		$res = $this->_getRecordsData(
			$selectfields = array("*,DATE_FORMAT(dateCreated, '%W %M %e %Y') AS dateCreated"), 
      $tables = array('blogs_tbl'),
      $fieldName = null, 
      $where = null, 
      $join = null,	 
      $joinType = null,
      $sortBy = null, 
      $sortOrder = null, 
      $limit = null, 
      $fieldNameLike = null, 
      $like = null,
      $whereSpecial = null, 
      $groupBy = null 
		);

		$data = array(
			'res' => $res,
		);

		$this->load->view('blogs/blogs',$data);
		
	}
	public function adminBlogs()
	{
		$this->load->view('blogs/adminBlogs');
	}
	// blogposts
	public function newestcryptowallet(){
		$this->load->view('blogs/blog-posts/newestcryptowallet');
	}

	public function tipsoncryptotrading(){
		$this->load->view('blogs/blog-posts/tipsoncryptotrading');
	}

	public function thekeytoweb3(){
		$this->load->view('blogs/blog-posts/thekeytoweb3');
	}

	public function bestcryptowallet2022(){
		$this->load->view('blogs/blog-posts/bestcryptowallet2022');
	}

	public function blogLoad($slug){
			$res = $this->_getRecordsData(
				$selectfields = array(
					"
						blogs_tbl.*, 
						blog_content_tbl.content AS blog_content, 
						DATE_FORMAT(blogs_tbl.dateCreated, '%W %M %e %Y') AS dateCreated,
					"), 
				$tables = array('blogs_tbl','blog_content_tbl'),
				$fieldName = array('blogs_tbl.routeLink'), 
				$where = array($slug), 
				$join = array("blogs_tbl.id = blog_content_tbl.blog_id"),	 
				$joinType = array('left'),
				$sortBy = null, 
				$sortOrder = null, 
				$limit = null, 
				$fieldNameLike = null, 
				$like = null,
				$whereSpecial = null, 
				$groupBy = null 
			);

			if(count($res)>=1){
				$seo = $this->_getRecordsData(
					$selectfields = array(
						"
							seo_tags_tbl.content AS seo_content, seo_tags_tbl.name AS seo_name,seo_tags_tbl.property AS seo_property
						"), 
					$tables = array('seo_tags_tbl','blogs_tbl'),
					$fieldName = array('blogs_tbl.routeLink'), 
					$where = array($slug),
					$join = array("seo_tags_tbl.blog_id = blogs_tbl.id "),	 
					$joinType = array('inner'),
					$sortBy = null, 
					$sortOrder = null, 
					$limit = null, 
					$fieldNameLike = null, 
					$like = null,
					$whereSpecial = null, 
					$groupBy = null 
				);

				$data = array(
					'blogDetails' => $res,
					'contents' => $res[0]->blog_content,
					'title' => $res[0]->title,
					'desc' => $res[0]->desc,
					'dateCreated' => $res[0]->dateCreated,
					'seoContents' => $seo,
				);

				$this->load->view('blogs/blog-posts/blogContainer', $data);

			}else{
				echo "no blogs for such link, damn";
			}

			// echo json_encode(array($slug,$res));


			
    }
	
}