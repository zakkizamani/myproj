<?php

class model_slider extends CI_Model {

    function select_all() {
        return $this->db->get('tabel_slider');
    }
    
    function simpan($gambar) {
        $data = array(
            'gambar' => $gambar
        );
        // var_dump($data);
        // die;
        $this->db->insert('tabel_slider', $data);
    }

    function update($gambar) {
        $data = array(
            'gambar' => $gambar
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tabel_slider', $data);
    }
    
    function total_rows(){
        return $this->db->get('tabel_slider')->num_rows();
    }

}

?>
