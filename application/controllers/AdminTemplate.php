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
	
	public function tplIndex() {
		
		$this->load->view('admin/tplIndex.html');
		
	}
	
	public function html($page){
		
		if ( ! file_exists(APPPATH.'views/admin/html/'.$page)){
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$this->load->view('admin/html/'.$page);
	}
	
	public function tpl($page){
		
		if ( ! file_exists(APPPATH.'views/admin/tpl/'.$page)){
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$this->load->view('admin/tpl/'.$page);
	}
	
	public function blocks($page){
		
		if ( ! file_exists(APPPATH.'views/admin/html/blocks/'.$page)){
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$this->load->view('admin/html/blocks/'.$page);
	}
	
	public function tplBlocks($page){
		
		if ( ! file_exists(APPPATH.'views/admin/tpl/blocks/'.$page)){
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$this->load->view('admin/tpl/blocks/'.$page);
	}
	
	public function material($page){
		
		if ( ! file_exists(APPPATH.'views/admin/html/material/'.$page)){
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$this->load->view('admin/html/material/'.$page);
	}
	
	public function tplMaterial($page){
		
		if ( ! file_exists(APPPATH.'views/admin/tpl/material/'.$page)){
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$this->load->view('admin/tpl/material/'.$page);
	}
}