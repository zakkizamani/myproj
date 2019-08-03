<?php


class model_artikel extends CI_Model{

    public function select_all(){

        return $this->db->get('tabel_artikel');

    }

//    public function create_artikel($post_image, $judul ){
//        $slug = $judul;

    public function create_artikel($post_image){
        $slug = url_title($this->input->post('judul'));
        // ini code bener ndak jelek sama sekali cuma biar style code sama saja
        // jadi kalo handle project bareng tidak perlu byk pertanyaan 
        // 1 . ini model parameter untuk fungsi usahakan berupa object yg matang/ param yang jelas
            //  create_artikel($array_data_artikel) -> jadi sudah bawa 1 object / array dari contollernya
            // fungsi model hanya meng olah apa yang di kasih
            // jangan sampai model mikir lagi -> v$this->input->post('judul') ini dia ambil lagi , baik nya di pass dari controller depan
            // jadi model usahakan dapat param fixed dari kontroller
            // supaya kalo pengembangan fungsi bisa lebih mudah , hmmm artikel terkenal ttg microservice pettrn

        $id=$this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();
        $data = array(
            'user_id' => $id['id'],
            'judul' => $this->input->post('judul'),
            'slug_artikel'  => $slug,
            'isi'  => $this->input->post('isi'),
            'kategori_id' => $this->input->post('kategori'),
            'gambar_artikel' =>$post_image,
            'dibuat'	=>time(),
        );

        // var_dump($data);
        // die;
        return $this->db->insert('tabel_artikel', $data);
    }


    public function update($gambar){
        $slug = url_title($this->input->post('judul'));
        $id=$this->db->get_where('tabel_user', ['email' =>$this->session->userdata('email')])->row_array();
        if($gambar==null){
                    $data=array(
                    'user_id' => $id['id'],
                    'judul' => $this->input->post('judul'),
                    'slug_artikel'  => $slug,
                    'isi'  => $this->input->post('isi'),
                    'kategori_id' => $this->input->post('kategori'),
                    'dibuat'	=>time());
        }else{
                    $data=array(
                    'user_id' => $id['id'],
                    'judul' => $this->input->post('judul'),
                    'slug_artikel'  => $slug,
                    'isi'  => $this->input->post('isi'),
                    'kategori_id' => $this->input->post('kategori'),
                    'gambar_artikel' =>$gambar,
                    'dibuat'	=>time());
        }

        // print_r($data);
        // die;
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('tabel_artikel',$data);
        }

        function total_rows(){
            return $this->db->get('tabel_artikel')->num_rows();
        }

        public function delete_post($id){
            $this->db->where('id', $id);
            $this->db->delete('tabel_artikel');
            return true;
        }


    }
?>