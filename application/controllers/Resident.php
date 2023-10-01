<?php 
    class Resident extends CI_Controller
    {
        public function __construct() {
            parent::__construct();
        }
        public function resident_index(){
        $this->load->view('menu/menubar');
        $this->load->view('resident/resident_view');
        $this->load->view('menu/footer');
    }
    }

?>