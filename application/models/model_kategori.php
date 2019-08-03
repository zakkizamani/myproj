<?php
class model_kategori extends CI_Model{
    
    function select_all(){
        return $this->db->get('tabel_kategori');
    }
    
    // function select_parent(){
    //     return $this->db->get_where('tabel_kategori',array('parent'=>0));
    // }
    
    function simpan(){
        $data=array('nama_kategori'     => $this->input->post('nama'),
                    'slug_kategori'     => seo_title($this->input->post('nama')));
        $this->db->insert('tabel_kategori',$data);
    }
    
    function update(){
        $data=array('nama_kategori'     => $this->input->post('nama'),
                    'slug_kategori' => seo_title($this->input->post('nama')));
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('tabel_kategori',$data);
    }

    public function get_kategori(){
        $this->db->order_by('nama_kategori');
        $query = $this->db->get('tabel_kategori');
        return $query->result_array();

    }
    
    function total_rows(){
        return $this->db->get('tabel_artikel')->num_rows();
    }
}
?>
