<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper('url');
    }

    public function index($islogin = false)
	{
	    if ($islogin){
	        $query = $this->login_model->get_user_info(true, true);
	        if(sizeof($query) > 0){
                $this->home($query[0]['id']);
            }
            else{
                $data['message'] = 'Invalid Username or Password.';
                $this->load->view('login', $data);
            }
        }else {
            $data['log'] = 'Log In';
            $data['id'] = 0;
            $this->load->view('index', $data);
	    }
    }

    public function login(){
        $data['message'] = '';
	    $this->load->view('login', $data);
    }

    public function signup(){
	    $data['message'] = "";
        $this->load->view('signup', $data);
    }

    public function check_status(){
        if($this->login_model->get_user_info(true)){
            $data['message'] = "Username is already exist.";
            $this->load->view('signup', $data);
        }else{
            $this->login_model->set_user();
            $query = $this->login_model->get_user_info(true, true);
            $this->home($query[0]['id']);
        }
    }

    public function profile($id){
        $query = $this->login_model->get_user_by_id($id);
        $data['id'] = $query[0]['id'];
        $data['username'] = $query[0]['username'];
        $data['password'] = $query[0]['password'];
        $data['log'] = 'Log Out';
        $this->load->view('profile', $data);
    }

    public function update_user($id){
        //if ($this->input->post('new_password') == $this->input->post('confirm_password')){
            $this->login_model->update($id);
            $this->home($id);
        //}
    }

    public function delete_user($id){
	    $this->login_model->delete($id);
        $data['log'] = 'Log In';
        $data['id'] = 0;
	    $this->load->view('index', $data);
    }

    public function home($id){
        $data['log'] = 'Log Out';
        $data['id'] = $id;
        $this->load->view('index', $data);
    }
}
