<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin  extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this -> load -> helper('auth');
		checkAuth('ADMIN');
	}

	public function index(){
				
		$this -> load -> view('admin/index.html');

	}

	public function html($page){

		if ( ! file_exists(APPPATH.'views/admin/html/'.$page)){
			// Whoops, we don't have a page for that!
			show_404();
		}

		$this -> load -> view('admin/html/'.$page);
	}

	public function blocks($page){

		if ( ! file_exists(APPPATH.'views/admin/html/blocks/'.$page)){
			// Whoops, we don't have a page for that!
			show_404();
		}

		$this -> load -> view('admin/html/blocks/'.$page);
	}

	public function material($page){

		if ( ! file_exists(APPPATH.'views/admin/html/material/'.$page)){
			// Whoops, we don't have a page for that!
			show_404();
		}

		$this -> load -> view('admin/tpl/material/'.$page);
	}

}
