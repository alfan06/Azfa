<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->database();

    //     if (
    //         $this->session->userdata('level')!="user") {
    //             redirect('login', 'refresh');
    //     }
    // }
    

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

    public function contact()
    {
        $data['title'] = 'Azfa';

        $this->form_validation->set_rules('full_name', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/template/headerIndex', $data);
            $this->load->view('auth/contact', $data);
            $this->load->view('auth/template/footerIndex');
        } else {
            $this->contact_model->contact();

            $this->session->set_flashdata('flash-data', 'Succesfully');
            redirect('auth/contact', 'refresh');
        }
    }

    public function kosong()
    {
        $this->load->view('auth/kosong');
    }
}