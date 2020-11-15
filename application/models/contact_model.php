<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class contact_model extends CI_Model {

    public function contact()
    {
        $data=[
            "full_name" => $this->input->post('full_name', true),
            "email" => $this->input->post('email', true),
            "phone" => $this->input->post('phone', true),
            "message" => $this->input->post('message', true)
        ];
        $this->db->insert('contact', $data);
    }

}

/* End of file contact_model.php */

?>