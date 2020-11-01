<?php

defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
        // $this->load->library('session');
    }

    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('auth/template/header_login', $data);
        $this->load->view('login/index', $data);
        $this->load->view('auth/template/footer_login');
    }

    public function proses_login()
    {
        $username = htmlspecialchars($this->input->post('uname1'));
        $passowrd = htmlspecialchars($this->input->post('pwd1'));

        $ceklogin = $this->login_model->login($username, $passowrd);

        if ($ceklogin) {
            foreach ($ceklogin as $row);
            $this->session->set_userdata('user', $row->username);
            $this->session->set_userdata('level', $row->level);
            $this->session->set_userdata('status', $row->status);

            if ($this->session->userdata('level') == "user" && $this->session->userdata('status') == "aktif") {
                redirect('auth/index');
            } 
            if ($this->session->userdata('level') == "admin" && $this->session->userdata('status') == "aktif") {
                redirect('admin/index');
            }
            else {
                redirect('login/index', 'refresh');
            }
        } else {
            $data['pesan'] = "username dan password anda salah";
            redirect('login/index', 'refresh');
        }
    }

    public function register()
    {
        $data['title'] = 'register';

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/template/header_login', $data);
            $this->load->view('register/index', $data);
            $this->load->view('auth/template/footer_login');
        } else {
            $this->login_model->register();

            // $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('login/index', 'refresh');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }
}

/* End of file login.php */
