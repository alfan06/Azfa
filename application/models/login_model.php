<?php

defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{

    public function login($username, $password)
    {
        // var_dump($username);
        // var_dump($password);
        // die();
        $this->db->select('username,password,level,status');
        $this->db->from('user');
        $this->db->where('username', $username); //maksudnya adalah selama inputan user 
        //yang disimpan pada parameter/$user sama dengan username
        $this->db->where('password', $password);
        $this->db->limit(1); //Data yang diambil cuma 1

        $query = $this->db->get();
        if ($query->num_rows() == 1) //jika data ditemukan 
        {
            return $query->result();
        } else {
            return false;
        }
    }

    public function register()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "username" => $this->input->post('username', true),
            "email" => $this->input->post('email', true),
            "password" => $this->input->post('password', true),
        ];

        $this->db->insert('user', $data);
    }
}

/* End of file login_model.php */

?>