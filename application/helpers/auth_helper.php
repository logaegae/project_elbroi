<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('checkAuth')){

    function checkAuth($type){

        $ci =& get_instance();

        if ( ! function_exists('redirect') || ! function_exists('uri_string')){
            $ci -> load -> helper('url');
        }

        //회원 미인증시
        if (!$ci->session->userdata('logged_in') && $type =='USER') {

            redirect('/login', 'refresh');

        }
        //관리자 미인증시
        if (!$ci->session->userdata('admin_logged_in') && $type =='ADMIN') {

            // if(!$ci->session->userdata('vi')){
            //     redirect('admin#/access/signin', 'refresh');
            //     $ci->session->set_userdata('vi', TRUE);
            // }

        }
    }
}
