<?php
    class Login_model extends CI_Model{

        public function __construct()
        {
            $this->load->database();
        }

        public function set_user(){
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            return $this->db->insert('login_id', $data);
        }

        public function get_user($username, $password = false){
            if($username and $password) {
                $this->db->select('id');
                $query = $this->db->get_where('login_id', array('username' => $this->input->post('username'),
                    'password' => $this->input->post('password')))->result_array();
                if(intval($query) > 0){
                    return true;
                }
                else{
                    return false;
                }
            }
            else{
                $this->db->select('id');
                $query = $this->db->get_where('login_id', array('username' => $this->input->post('username')))->result_array();
                if(intval($query) > 0){
                    return true;
                }
                else{
                    return false;
                }
            }
        }
        
    }

?>