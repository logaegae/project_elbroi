<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

        public function view($page)
        {
                if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
                        // Whoops, we don't have a page for that!
                        show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter
				
                $page !== 'Under_Construction' ? $this->load->view('templates/header', $data) : '';
                
            	$this->load->view('pages/'.$page, $data);
            	
            	$page !== 'Under_Construction' ? $this->load->view('templates/footer', $data) : '';
        }
        
        public function index()
        {
        	
        	$this->load->view('pages/Under_Construction');
        	
        }
}
