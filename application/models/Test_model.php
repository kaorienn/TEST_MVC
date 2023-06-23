<?php
    class Test_model extends CI_Model{
        public function __construct()
        {
            $this->load->database(); //connection
        }


        public function get_db()
        {
            $test_query = $this->db->get('test_user'); //get database mysql
            return $test_query->result_array();
        }

        public function insert_db()
        {
            $test_query = $this->db->insert('test_user'); //get database mysql
            return $test_query->result_array();
        }
    }