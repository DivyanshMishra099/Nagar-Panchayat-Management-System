<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departments extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form','url'));
        $this->load->database();
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/login');
        }
    }

    public function index()
    {
        $data['page_title'] = 'Manage Departments';
        $data['items'] = $this->db->order_by('id', 'DESC')->get('tbl_departments')->result();
        $this->load->view('admin/layout', array('page' => 'admin/departments/index', 'data' => $data));
    }

    public function save()
    {
        $id = $this->input->post('id', TRUE);
        $data = array(
            'name' => $this->input->post('name', TRUE),
            'icon' => $this->input->post('icon', TRUE),
            'status' => 1
        );

        if (!empty($id)) {
            $this->db->where('id', $id)->update('tbl_departments', $data);
        } else {
            $this->db->insert('tbl_departments', $data);
        }

        redirect('admin/departments');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Department';
        $data['item'] = $this->db->where('id', $id)->get('tbl_departments')->row();
        $data['items'] = $this->db->order_by('id', 'DESC')->get('tbl_departments')->result();
        $this->load->view('admin/layout', array('page' => 'admin/departments/index', 'data' => $data));
    }

    public function delete($id)
    {
        $this->db->where('id', $id)->delete('tbl_departments');
        redirect('admin/departments');
    }
}
