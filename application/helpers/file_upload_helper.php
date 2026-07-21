<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('upload_admin_image')) {
    function upload_admin_image($field_name, $upload_path)
    {
        $ci = &get_instance();
        $ci->load->library('upload');

        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, TRUE);
        }

        $config = array(
            'upload_path' => $upload_path,
            'allowed_types' => 'jpg|jpeg|png|gif|webp',
            'encrypt_name' => TRUE,
            'overwrite' => FALSE
        );

        $ci->upload->initialize($config);

        if ($ci->upload->do_upload($field_name)) {
            $data = $ci->upload->data();
            return $data['file_name'];
        }

        return '';
    }
}
