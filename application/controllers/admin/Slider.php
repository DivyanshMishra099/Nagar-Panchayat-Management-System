<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller
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
        $data['page_title'] = 'Manage Slider';
        $data['items'] = $this->db->order_by('id', 'DESC')->get('tbl_slider')->result();
        $this->load->view('admin/layout', array('page' => 'admin/slider/index', 'data' => $data));
    }

    public function save()
    {
        $this->load->helper('file_upload');
        $imagePath = upload_admin_image('image', 'uploads/slider/');
        $title_en = $this->input->post('title_en', TRUE);
        $title_hi = $this->input->post('title_hi', TRUE);
        $subtitle_en = $this->input->post('subtitle_en', TRUE);
        $subtitle_hi = $this->input->post('subtitle_hi', TRUE);

        $legacy_title = $this->input->post('title', TRUE);
        $legacy_subtitle = $this->input->post('subtitle', TRUE);

        $data = array(
            'title' => $legacy_title ?: ($title_en ?: $title_hi),
            'subtitle' => $legacy_subtitle ?: ($subtitle_en ?: $subtitle_hi),
            'image' => $imagePath ? $imagePath : ''
        );
        if ($this->db->field_exists('status', 'tbl_slider')) {
            $data['status'] = 1;
        }

        // bilingual fields support
        if ($this->db->field_exists('title_en', 'tbl_slider')) {
            $data['title_en'] = $title_en;
        }
        if ($this->db->field_exists('title_hi', 'tbl_slider')) {
            $data['title_hi'] = $title_hi;
        }
        if ($this->db->field_exists('subtitle_en', 'tbl_slider')) {
            $data['subtitle_en'] = $subtitle_en;
        }
        if ($this->db->field_exists('subtitle_hi', 'tbl_slider')) {
            $data['subtitle_hi'] = $subtitle_hi;
        }
        $this->db->insert('tbl_slider', $data);
        redirect('admin/slider');
    }

    public function delete($id)
    {
        $this->db->where('id', $id)->delete('tbl_slider');
        redirect('admin/slider');
    }
}
