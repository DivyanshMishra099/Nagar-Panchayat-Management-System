<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');

        if ($this->session->userdata('site_lang') == 'hindi') {
            $this->lang->load('website', 'hindi');
        } else {
            $this->lang->load('website', 'english');
        }
    }

    public function about()
    {
        $data['content'] = $this->load->view('pages/about', [], TRUE);
        $this->load->view('layout', $data);
    }

    public function departments()
    {
        $data['content'] = $this->load->view('pages/departments', [], TRUE);
        $this->load->view('layout', $data);
    }

    public function services()
    {
        $data['content'] = $this->load->view('pages/services', [], TRUE);
        $this->load->view('layout', $data);
    }

    public function schemes()
    {
        $data['content'] = $this->load->view('pages/schemes', [], TRUE);
        $this->load->view('layout', $data);
    }

    public function notices()
    {
        $data['content'] = $this->load->view('pages/notices', [], TRUE);
        $this->load->view('layout', $data);
    }

    public function gallery()
    {
        $this->load->database();
        $data['gallery'] = $this->db
            ->order_by('id', 'DESC')
            ->get('tbl_gallery')
            ->result();
        $data['content'] = $this->load->view('pages/gallery', $data, TRUE);
        $this->load->view('layout', $data);
    }

    public function contact()
    {
        $data['content'] = $this->load->view('pages/contact', [], TRUE);
        $this->load->view('layout', $data);
    }
}
