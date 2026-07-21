<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper(array('url','form'));
        $this->load->library('session');

        $this->load->model('admin/News_model');

        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/login');
        }
    }

    public function index()
    {
        $data['page_title'] = 'Manage News';
        $data['news'] = $this->News_model->get_all();

        $this->load->view('admin/layout', array('page' => 'admin/news/index', 'data' => $data));
    }

    public function add()
    {
        $data=array(

            'title_en'=>$this->input->post('title_en'),
            'title_hi'=>$this->input->post('title_hi'),

            'description_en'=>$this->input->post('description_en'),
            'description_hi'=>$this->input->post('description_hi'),

            'news_date'=>$this->input->post('news_date'),
            'status'=>1
        );

        $this->News_model->insert($data);

        redirect('admin/news');
    }

    public function delete($id)
    {
        $this->News_model->delete($id);

        redirect('admin/news');
    }
}