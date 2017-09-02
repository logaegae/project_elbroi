<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin  extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index(){
		
		$this->load->view('admin/index.html');
		
	}

	public function tpl($page){
		
		if ( ! file_exists(APPPATH.'views/admin/tpl/'.$page)){
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$this->load->view('admin/tpl/'.$page);
	}
	
	public function blocks($page){
		
		if ( ! file_exists(APPPATH.'views/admin/tpl/blocks/'.$page)){
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$this->load->view('admin/tpl/blocks/'.$page);
	}
	
	public function material($page){
		
		if ( ! file_exists(APPPATH.'views/admin/tpl/material/'.$page)){
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$this->load->view('admin/tpl/material/'.$page);
	}
	
}
	
}