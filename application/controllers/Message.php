<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 13/12/2018
 * Time: 9:24
 */

class Message extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('message_model');
        $this->load->helper('url');
    }

    public function sent($id){
        $this->message_model->addMessage();
        $data['log'] = 'Log Out';
        $data['id'] = $id;
        $data['message'] = '';
        $this->load->view('index', $data);
    }
}