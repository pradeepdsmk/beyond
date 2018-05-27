<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index() {
        $this->load->view('admin-view');
    }
    
    public function get_data() {
        $sql = "select count(*) as webdev_count  from contacts where requirement = ?";
        $webdev_count = $this->db->query($sql, ['webdev'])->result_array();
                
        $sql = "select count(*)as dmktg_count from contacts where requirement = ?;";
        $dmktg_count = $this->db->query($sql, ['dmktg'])->result_array();
        
        $result = [$webdev_count[0]['webdev_count'], $dmktg_count[0]['dmktg_count']];
                
//        log_message('debug', print_r($result, true));
        
        
        echo json_encode($result);
    }
}