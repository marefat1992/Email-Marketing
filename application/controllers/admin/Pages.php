
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
    }

    public function index(){
        $data = array();
        $data['page_title'] = 'Dashboard';
        $data['main_content'] = $this->load->view('admin/home', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function blank(){
        $data = array();
        $data['page_title'] = 'Pages';
        $data['main_content'] = $this->load->view('admin/settings/blank', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function profile(){
        $data = array();
        $data['page_title'] = 'Pages';
        $data['main_content'] = $this->load->view('admin/settings/profile', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function invoice(){
        $data = array();
        $data['page_title'] = 'Pages';
        $data['main_content'] = $this->load->view('admin/settings/invoice', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function recover(){
        $data = array();
        $data['page_title'] = 'Pages';
        $this->load->view('admin/settings/recover', $data);
    }

    public function register(){
        $data = array();
        $data['page_title'] = 'Pages';
        $this->load->view('admin/settings/register', $data);
    }

    public function login(){
        $data = array();
        $data['page_title'] = 'Pages';
        $this->load->view('admin/settings/login', $data);
    }

    public function lockscreen(){
        $data = array();
        $data['main_content'] = $this->load->view('admin/settings/language', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function error(){
        $data = array();
        $data['main_content'] = $this->load->view('admin/settings/new_language', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
    public function Upload(){
        $data = array();
        $data['main_content'] = $this->load->view('admin/settings/upload', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
    public function form_layout(){
        $data = array();
        $data['main_content'] = $this->load->view('admin/settings/form_layout', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
    public function layouts(){
        $data = array();
        $data['main_content'] = $this->load->view('admin/settings/layouts', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    


}