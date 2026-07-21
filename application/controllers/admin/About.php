<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller
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
        $data['page_title'] = 'Manage About';
        $data['item'] = null;
        if ($this->db->table_exists('tbl_about')) {
            $data['item'] = $this->db->get('tbl_about')->row();
        }
        $this->load->view('admin/layout', array('page' => 'admin/about/index', 'data' => $data));
    }

    public function save()
    {
        // Ensure table exists
        if (!$this->db->table_exists('tbl_about')) {
            $sql = "CREATE TABLE IF NOT EXISTS tbl_about (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title_en VARCHAR(255) NULL,
                title_hi VARCHAR(255) NULL,
                content_en TEXT NULL,
                content_hi TEXT NULL,
                image VARCHAR(255) NULL,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
            $this->db->query($sql);
        }

        $this->load->helper('file_upload');
        $imagePath = upload_admin_image('image', 'uploads/officials/');

        $data = array();
        if ($this->db->field_exists('title_en', 'tbl_about')) {
            $data['title_en'] = $this->input->post('title_en', TRUE);
        }
        if ($this->db->field_exists('title_hi', 'tbl_about')) {
            $data['title_hi'] = $this->input->post('title_hi', TRUE);
        }
        if ($this->db->field_exists('content_en', 'tbl_about')) {
            $data['content_en'] = $this->input->post('content_en');
        }
        if ($this->db->field_exists('content_hi', 'tbl_about')) {
            $data['content_hi'] = $this->input->post('content_hi');
        }
        if ($imagePath) {
            if ($this->db->field_exists('image', 'tbl_about')) {
                $data['image'] = $imagePath;
            }
        }

        $existing = $this->db->get('tbl_about')->row();
        if ($existing) {
            $this->db->where('id', $existing->id)->update('tbl_about', $data);
        } else {
            $this->db->insert('tbl_about', $data);
        }

        redirect('admin/about');
    }

    public function delete_image()
    {
        if ($this->db->table_exists('tbl_about')) {
            $item = $this->db->get('tbl_about')->row();
            if ($item && !empty($item->image)) {
                // attempt unlink
                @unlink(FCPATH . $item->image);
                $this->db->where('id', $item->id)->update('tbl_about', array('image' => NULL));
            }
        }
        redirect('admin/about');
    }
}
