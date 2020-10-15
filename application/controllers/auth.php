<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'azfa';
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