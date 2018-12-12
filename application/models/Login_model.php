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

        public function get_user_info($username, $password = false){
            if($username and $password) {
                $this->db->select('id');
                $query = $this->db->get_where('login_id', array('username' => $this->input->post('username'),
                    'password' => $this->input->post('password')))->result_array();
                return $query;
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

        public function get_user_by_id($id){
            return $this->db->get_where('login_id', array('id' => $id))->result_array();
        }

        public function update($id){
            $data = array('password' => $this->input->post('new_password'));
            $this->db->where('id', $id);
            $this->db->update('login_id', $data);
        }

        public function delete($id){
            return $this->db->delete('login_id', array('id' => $id));
        }
    }

?>