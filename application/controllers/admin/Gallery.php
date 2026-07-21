<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form','url','file_upload'));
        $this->load->database();
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/login');
        }
    }

    public function index()
    {
        $data['page_title'] = 'Manage Gallery';
        $data['items'] = $this->db->order_by('id', 'DESC')->get('tbl_gallery')->result();
        $this->load->view('admin/layout', array('page' => 'admin/gallery/index', 'data' => $data));
    }

    public function save()
    {
        $this->load->helper('file_upload');
        $imagePath = upload_admin_image('image', 'uploads/gallery/');
        $title_en = $this->input->post('title_en', TRUE);
        $title_hi = $this->input->post('title_hi', TRUE);
        $legacy_title = $this->input->post('title', TRUE);

        $data = array(
            'title' => $legacy_title ?: ($title_en ?: $title_hi),
            'image' => $imagePath ? $imagePath : ''
        );
        if ($this->db->field_exists('status', 'tbl_gallery')) {
            $data['status'] = 1;
        }
        if ($this->db->field_exists('title_en', 'tbl_gallery')) {
            $data['title_en'] = $title_en;
        }
        if ($this->db->field_exists('title_hi', 'tbl_gallery')) {
            $data['title_hi'] = $title_hi;
        }

        $this->db->insert('tbl_gallery', $data);
        redirect('admin/gallery');
    }

    public function delete($id)
    {
        $this->db->where('id', $id)->delete('tbl_gallery');
        redirect('admin/gallery');
    }
}
