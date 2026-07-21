<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Load helpers & libraries
        $this->load->library('session');
        $this->load->helper(array('url', 'language'));

        // Database
        $this->load->database();

        // Model
        $this->load->model('Admin/News_model');

        // Language
        if ($this->session->userdata('site_lang') == 'hindi')
        {
            $this->lang->load('website', 'hindi');
        }
        else
        {
            $this->lang->load('website', 'english');
        }
    }

    public function index()
{
    $data = array();

    $data['news'] = $this->News_model->get_latest_news();

    $data['slider'] = $this->db
        ->where('status',1)
        ->get('tbl_slider')
        ->result();

    $data['gallery'] = $this->db
        ->order_by('id','DESC')
        ->limit(8)
        ->get('tbl_gallery')
        ->result();

    $data['departments'] = $this->db
        ->where('status',1)
        ->get('tbl_departments')
        ->result();

    $data['statistics'] = $this->db
        ->get('tbl_statistics')
        ->result();

    $data['chairman'] = $this->db
        ->get('tbl_chairman')
        ->row();

    $data['contact'] = $this->db
        ->get('tbl_contact')
        ->row();

    $data['footer'] = $this->db
        ->get('tbl_footer')
        ->row();

    $data['content'] = $this->load->view('home',$data,TRUE);

    $this->load->view('layout',$data);
}

    public function changeLanguage($language)
    {
        if ($language == "hindi")
        {
            $this->session->set_userdata('site_lang', 'hindi');
        }
        else
        {
            $this->session->set_userdata('site_lang', 'english');
        }

        redirect(base_url());
    }
}