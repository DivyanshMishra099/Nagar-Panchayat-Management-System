<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Footer extends CI_Controller
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
        $data['page_title'] = 'Manage Footer';
        $data['items'] = array();
        if ($this->db->table_exists('tbl_footer')) {
            $data['items'] = $this->db->order_by('id', 'DESC')->get('tbl_footer')->result();
        }
        $this->load->view('admin/layout', array('page' => 'admin/footer/index', 'data' => $data));
    }

    public function save()
    {
        // Ensure table exists, create if missing
        if (!$this->db->table_exists('tbl_footer')) {
            $sql = "CREATE TABLE IF NOT EXISTS tbl_footer (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NULL,
                content TEXT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
            $this->db->query($sql);
        }

        $id = $this->input->post('id', TRUE);
        $data = array();
        if ($this->db->field_exists('title', 'tbl_footer')) {
            $data['title'] = $this->input->post('title', TRUE);
        }
        if ($this->db->field_exists('content', 'tbl_footer')) {
            $data['content'] = $this->input->post('content', TRUE);
        }
        if (!empty($data)) {
            if (!empty($id)) {
                $this->db->where('id', $id)->update('tbl_footer', $data);
            } else {
                $this->db->insert('tbl_footer', $data);
            }
        }
        redirect('admin/footer');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Footer';
        $data['item'] = $this->db->where('id', $id)->get('tbl_footer')->row();
        $data['items'] = $this->db->order_by('id', 'DESC')->get('tbl_footer')->result();
        $this->load->view('admin/layout', array('page' => 'admin/footer/index', 'data' => $data));
    }

    public function delete($id)
    {
        if ($this->db->table_exists('tbl_footer')) {
            $this->db->where('id', $id)->delete('tbl_footer');
        }
        redirect('admin/footer');
    }
}
