<?php

function check_session() {
    $CI = & get_instance();
    $session = $CI->session->userdata('status');
    if ($session != 'login') {
        redirect('Auth');
    }
}

?>
