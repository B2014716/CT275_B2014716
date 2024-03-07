<?php

class index extends DController
{

	public function __construct()
	{
		$data = array();
		parent::__construct();
	}
	public function index()
	{


		$this->homepage();
	}
	public function homepage()
	{
		$table = 'tbl_category_product';
		$table_product = 'tbl_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$data['product_home'] = $categorymodel->list_product_index($table_product);
		$this->load->view('header', $data);
		$this->load->view('slider', $data);
		$this->load->view('home', $data);
		$this->load->view('footer');
	}


	public function notfound()
	{
		$table = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$table_post = 'tbl_category_post';
		$data['category_post'] = $categorymodel->categorypost_home($table_post);

		$this->load->view('header', $data);
		$this->load->view('404');
		$this->load->view('footer');
	}
}
