<?php

class Message_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function addMessage(){
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message')
        );
        return $this->db->insert('message', $data);
    }

}