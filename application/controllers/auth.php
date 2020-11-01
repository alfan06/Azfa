<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

        if (
            $this->session->userdata('level')!="user") {
                redirect('login', 'refresh');
        }
    }
    

    public function index()
    {
        $data['title'] = 'Azfa';
        $this->load->view('auth/template/headerIndex');
        $this->load->view('auth/index');
        $this->load->view('auth/template/footerIndex');
    }
    public function about()
    {
        $data['title'] = 'Azfa';
        $this->load->view('auth/template/headerIndex');
        $this->load->view('auth/about');
        $this->load->view('auth/template/footerIndex');
    }
}