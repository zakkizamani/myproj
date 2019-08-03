<?php


class model_settings extends CI_Model{

    public function select_all(){

        return $this->db->get('tabel_company');

    }

    public function buat_profile($post_image){
        $data = array(
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
            'alamat_perusahaan'  => $this->input->post('alamat'),
            'logo' =>$post_image
        );

        // var_dump($data);
        // die;
        return $this->db->insert('tabel_company', $data);
    }

    public function update($gambar){
        if($gambar==null){
                    $data=array(
                        'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                        'alamat_perusahaan'  => $this->input->post('alamat'));
        }else{
                    $data=array(
                        'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                        'alamat_perusahaan'  => $this->input->post('alamat'),
                        'logo' =>$gambar);
        }

        // print_r($data);
        // die;
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('tabel_company',$data);
        }

        function total_rows(){
            return $this->db->get('tabel_artikel')->num_rows();
        }

        function delete(){
            $this->db->where('id',$this->uri->segment(3));
            $this->db->delete('tabel_company');
            redirect('settings');
        }


}




?>