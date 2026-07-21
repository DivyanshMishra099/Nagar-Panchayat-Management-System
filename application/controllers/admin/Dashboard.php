<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();

        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/login');
        }
    }

    public function index()
    {
        $total_news = $this->db->count_all('tbl_news');
        $total_sliders = $this->db->count_all('tbl_slider');
        $total_gallery = $this->db->count_all('tbl_gallery');
        $total_departments = $this->db->count_all('tbl_departments');

        $data = array(
            'page_title' => 'Dashboard',
            'stats' => array(
                array('title' => 'Total News', 'value' => (string) $total_news, 'icon' => 'newspaper', 'color' => 'primary'),
                array('title' => 'Sliders', 'value' => (string) $total_sliders, 'icon' => 'images', 'color' => 'success'),
                array('title' => 'Gallery Items', 'value' => (string) $total_gallery, 'icon' => 'images', 'color' => 'warning'),
                array('title' => 'Departments', 'value' => (string) $total_departments, 'icon' => 'building', 'color' => 'danger')
            ),
            'quick_links' => array(
                array('label' => 'Manage News', 'url' => 'admin/news'),
                array('label' => 'Manage Gallery', 'url' => 'admin/gallery'),
                array('label' => 'Manage Slider', 'url' => 'admin/slider')
            )
        );

        $this->load->view('admin/layout', array('page' => 'admin/dashboard/index', 'data' => $data));
    }
}