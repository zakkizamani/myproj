<?php 

class model_login extends CI_Model{


    function cek_login($email){

        $cek =$this->db->get_where('tabel_user', ['email'=>$email])->row_array();
      return $cek;
        // if($cek->num_rows() > 0){

        //     return 1;

        // }else{

        //     return 0;

        // }
    }

} 

 

 ?>