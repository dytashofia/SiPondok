<?php
function adm_logged_in()
{
    $var_ci = get_instance();
    if (!$var_ci->session->userdata('username')) {
        redirect('admin/login');
    } else {
        // redirect('admin/dashboard');
    }
}

function cekadm()
{
    $var_ci = get_instance();
    $data = $var_ci->session->userdata('username');

    $user = $var_ci->db->get_where('tb_admin', [
        'username' => $data
    ])->row_array();
    if ($user['level'] != 'admin') {
        redirect('santri/login');
        die;
    }
}
