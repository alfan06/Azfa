<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('pembayaran_model');
        $this->load->model('contact_model');
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

    public function tiket()
    {
        if ($this->session->userdata('level') == "user" and $this->session->userdata('status') == "Aktif") {
            $data['title'] = "Purchasing a Ticket";
            $data['jenisTiket'] = $this->pembayaran_model->getTiket();

            $this->form_validation->set_rules('id_user', 'Id_user', 'trim|required');
            $this->form_validation->set_rules('id_tiket', 'Id_tiket', 'trim|required');
            $this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
            $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
            $this->form_validation->set_rules('pertandingan', 'Pertandingan', 'trim|required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('auth/template/headerIndex', $data);
                $this->load->view('auth/tiket', $data);
                $this->load->view('auth/template/footerIndex');
            } else{
                $this->pembayaran_model->beliTiket();
                $this->session->set_flashdata('flash-data', 'Succesfully');
                redirect('auth/tiket', 'refresh');
            }
           
        } else {
            redirect('login', 'refresh');
        }
    }
}