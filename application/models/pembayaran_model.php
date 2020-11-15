<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran_model extends CI_Model {

    public function getTiket()
    {
        $this->db->select('id_tiket, jenis_tiket, harga')
        ->from('tiket');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function beliTiket()
    {
        $data=[
            "id_user" => $this->input->post('id_user', true),
            "id_tiket" => $this->input->post('id_tiket', true),
            "jumlah" => $this->input->post('jumlah', true),
            "pertandingan" => $this->input->post('pertandingan', true),
            "phone" => $this->input->post('phone', true),
            "tanggal" => date("Y-m-d H:i:s")
        ];

        $this->db->insert('pembayaran', $data);
    }

}

/* End of file pembayaran_model.php */

?>