<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form','url'));
        $this->load->model('Admin/Home_content_model');

        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/login');
        }
    }

    public function index()
    {
        $data['page_title'] = 'Manage Home Content';
        $data['slider_items'] = $this->Home_content_model->get_slider();
        $data['gallery_items'] = $this->Home_content_model->get_gallery();
        $data['departments'] = $this->Home_content_model->get_departments();
        $data['statistics'] = $this->Home_content_model->get_statistics();
        $this->load->view('admin/layout', array('page' => 'admin/content/index', 'data' => $data));
    }

    public function add_slider()
    {
        $this->load->helper('file_upload');
        $imagePath = upload_admin_image('image', 'uploads/slider/');

        // Prefer bilingual inputs if provided, otherwise fall back to legacy fields
        $title_en = $this->input->post('title_en', TRUE);
        $title_hi = $this->input->post('title_hi', TRUE);
        $subtitle_en = $this->input->post('subtitle_en', TRUE);
        $subtitle_hi = $this->input->post('subtitle_hi', TRUE);

        $legacy_title = $this->input->post('title', TRUE);
        $legacy_subtitle = $this->input->post('subtitle', TRUE);

        $data = array(
            'title' => $legacy_title ?: ($title_en ?: $title_hi),
            'subtitle' => $legacy_subtitle ?: ($subtitle_en ?: $subtitle_hi),
            'image' => $imagePath ? $imagePath : '',
        );
        if ($this->db->field_exists('status', 'tbl_slider')) {
            $data['status'] = 1;
        }

        // bilingual support
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

        $this->Home_content_model->save_slider($data);
        redirect('admin/content');
    }

    public function add_gallery()
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
        // bilingual title support
        if ($this->db->field_exists('title_en', 'tbl_gallery')) {
            $data['title_en'] = $title_en;
        }
        if ($this->db->field_exists('title_hi', 'tbl_gallery')) {
            $data['title_hi'] = $title_hi;
        }

        $this->Home_content_model->save_gallery($data);
        redirect('admin/content');
    }

    public function add_department()
    {
        $data = array(
            'name' => $this->input->post('name', TRUE),
            'icon' => $this->input->post('icon', TRUE),
            'status' => 1
        );

        $this->Home_content_model->save_department($data);
        redirect('admin/content');
    }

    public function add_statistic()
    {
        $data = array(
            'title' => $this->input->post('label', TRUE),
            'number' => $this->input->post('value', TRUE),
            'icon' => $this->input->post('icon', TRUE)
        );

        $this->Home_content_model->save_statistic($data);
        redirect('admin/content');
    }

    public function delete_slider($id)
    {
        $this->Home_content_model->delete_slider($id);
        redirect('admin/content');
    }

    public function delete_gallery($id)
    {
        $this->Home_content_model->delete_gallery($id);
        redirect('admin/content');
    }

    public function delete_department($id)
    {
        $this->Home_content_model->delete_department($id);
        redirect('admin/content');
    }

    public function delete_statistic($id)
    {
        $this->Home_content_model->delete_statistic($id);
        redirect('admin/content');
    }
}
