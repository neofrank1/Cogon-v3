<?php
    class Resident_Model extends CI_Model
    {
        public function get_all_residents()
        {
            $query = $this->db->get('resident');
            return $query->result();
        }
    }
?>