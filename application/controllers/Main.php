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
	        if($this->login_model->get_user(true, true)){
                $data['log'] = 'Log Out';
                $this->load->view('index', $data);
            }
            else{
                $data['message'] = 'Username atau Password salah.';
                $this->load->view('login', $data);
            }
        }else {
            $data['log'] = 'Log In';
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
        if($this->login_model->get_user(true)){
            $data['message'] = "Username telah digunakan.";
            $this->load->view('signup', $data);
        }else{
            $this->login_model->set_user();
            $data['log'] = 'Log Out';
            $this->load->view('index', $data);
        }
    }
}
