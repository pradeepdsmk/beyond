<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    public function index() {
        $this->load->view('contact');
    }
    
    public function save() {
//        $this->load->library('database');/
        
//        log_message('debug', 'inside save method');
        
        $post = $this->input->post();
        
//        log_message('debug', print_r($post, true));
        
        $this->db->insert('contacts', [
            'name' => $post['name'],
            'email' => $post['email'],
            'phone' => $post['phone'],
            'requirement' => $post['req']
        ]);
        
        echo 'ok';
    }
}