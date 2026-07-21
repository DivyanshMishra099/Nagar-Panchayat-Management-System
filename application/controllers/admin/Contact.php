<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller
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
        $data['page_title'] = 'Manage Contact';
        $data['items'] = array();
        if ($this->db->table_exists('tbl_contact')) {
            $data['items'] = $this->db->order_by('id', 'DESC')->get('tbl_contact')->result();
        }
        $this->load->view('admin/layout', array('page' => 'admin/contact/index', 'data' => $data));
    }

    public function save()
    {
        // Ensure table exists, create if missing
        if (!$this->db->table_exists('tbl_contact')) {
            $sql = "CREATE TABLE IF NOT EXISTS tbl_contact (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NULL,
                value TEXT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
            $this->db->query($sql);
        }

        $id = $this->input->post('id', TRUE);
        $data = array();
        if ($this->db->field_exists('name', 'tbl_contact')) {
            $data['name'] = $this->input->post('name', TRUE);
        }
        if ($this->db->field_exists('value', 'tbl_contact')) {
            $data['value'] = $this->input->post('value', TRUE);
        }
        if (!empty($data)) {
            if (!empty($id)) {
                $this->db->where('id', $id)->update('tbl_contact', $data);
            } else {
                $this->db->insert('tbl_contact', $data);
            }
        }
        redirect('admin/contact');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Contact';
        $data['item'] = $this->db->where('id', $id)->get('tbl_contact')->row();
        $data['items'] = $this->db->order_by('id', 'DESC')->get('tbl_contact')->result();
        $this->load->view('admin/layout', array('page' => 'admin/contact/index', 'data' => $data));
    }

    public function delete($id)
    {
        if ($this->db->table_exists('tbl_contact')) {
            $this->db->where('id', $id)->delete('tbl_contact');
        }
        redirect('admin/contact');
    }
}
