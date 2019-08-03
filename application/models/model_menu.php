<?php
class model_menu extends CI_Model{
    
    function select_all(){
        return $this->db->get('tabel_menu');
    }
    
    function select_parent(){
        return $this->db->get_where('tabel_menu',array('parent'=>0));
    }
    
    function simpan(){
        $data=array('nama_menu'     => $this->input->post('nama'),
                    'link'     => $this->input->post('link'),
                    'icon'     => $this->input->post('icon'),
                    'parent'     => $this->input->post('parent'));
        // print_r($data);
        // die;
        $this->db->insert('tabel_menu',$data);
    }
    
    function update(){
        $data=array('nama_menu'     => $this->input->post('nama'),
                    'slug_menu' => seo_title($this->input->post('nama')));
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('tabel_menu',$data);
    }

    public function get_menu(){
        $this->db->order_by('nama_menu');
        $query = $this->db->get('tabel_menu');
        return $query->result_array();

    }
    
    function total_rows(){
        return $this->db->get('tabel_artikel')->num_rows();
    }
}
?>
