<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form','url'));
        $this->config->set_item('sess_cookie_name', 'nagarpanchayat_admin');
        $this->config->set_item('sess_expiration', 7200);
        $this->config->set_item('sess_time_to_update', 300);
        $this->config->set_item('sess_match_ip', FALSE);
        $this->config->set_item('sess_match_useragent', TRUE);
    }

    public function index()
    {
        if ($this->session->userdata('admin_logged_in')) {
            redirect('admin/dashboard');
        }

        $data['error'] = $this->session->flashdata('error');
        $this->load->view('admin/login', $data);
    }

    public function process_login()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        if ($username === 'admin' && $password === 'admin123') {
            $this->session->set_userdata(array(
                'admin_logged_in' => TRUE,
                'admin_username' => $username
            ));
            $this->session->mark_as_temp(array('admin_logged_in' => 7200), 7200);
            redirect('admin/dashboard');
        }

        $this->session->set_flashdata('error', 'Invalid username or password.');
        redirect('admin/login');
    }

    public function logout()
    {
        $this->session->unset_userdata(array('admin_logged_in', 'admin_username'));
        redirect('admin/login');
    }
}
