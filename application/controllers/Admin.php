<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index() {
        $this->load->view('admin-view');
    }
    
    public function get_data() {
        //get data from db
        $sql = "select count(*) as webdev_count  from contacts where requirement = ?";
        $query = $this->db->query($sql, ['webdev']);        
        log_message('debug', print_r($query, true));        
        $webdev_count = $query->result_array();                        
        log_message('debug', print_r($webdev_count, true));                
        $sql = "select count(*)as dmktg_count from contacts where requirement = ?;";
        $dmktg_count = $this->db->query($sql, ['dmktg'])->result_array();
        
        
        //build response from data
        $result = [$webdev_count[0]['webdev_count'], $dmktg_count[0]['dmktg_count']];
                
//        log_message('debug', print_r($result, true));
        
        //send data to browser
        echo json_encode($result);
    }
}