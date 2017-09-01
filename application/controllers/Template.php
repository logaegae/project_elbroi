<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

        public function index($page = 'index')
   		{	
   			$endNum = strpos($page,'.html');
   			if($endNum != false){
   				
   				$page = substr($page, 0, $endNum);
   			}
   			
            if ( ! file_exists(APPPATH.'views/adella/'.$page.'.php')){
                    // Whoops, we don't have a page for that!
                    show_404();
            }

            $data['title'] = ucfirst($page); // Capitalize the first letter
						
            $this->load->view('adella/'.$page, $data);
            
        }
}