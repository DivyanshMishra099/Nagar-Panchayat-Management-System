<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Officials extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->model('Admin/Officials_model');

        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/login');
        }
    }

    public function index()
    {
        $data['page_title'] = 'Manage Officials';
        $data['officials'] = $this->Officials_model->get_all();
        $this->load->view('admin/layout', array('page' => 'admin/officials/index', 'data' => $data));
    }

    public function add()
    {
        $this->load->helper('file_upload');
        $imagePath = upload_admin_image('image', 'uploads/officials/');

        $data = array(
            'name' => $this->input->post('name', TRUE),
            'designation' => $this->input->post('designation', TRUE),
            'message' => $this->input->post('message', TRUE),
            'image' => $imagePath ? $imagePath : ''
        );

        $this->Officials_model->insert($data);
        redirect('admin/officials');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Official';
        $data['official'] = $this->Officials_model->find($id);
        $this->load->view('admin/layout', array('page' => 'admin/officials/edit', 'data' => $data));
    }

    public function update($id)
    {
        $this->load->helper('file_upload');
        $imagePath = upload_admin_image('image', 'uploads/officials/');

        $data = array(
            'name' => $this->input->post('name', TRUE),
            'designation' => $this->input->post('designation', TRUE),
            'message' => $this->input->post('message', TRUE),
            'image' => $imagePath ? $imagePath : $this->input->post('old_image', TRUE)
        );

        $this->Officials_model->update($id, $data);
        redirect('admin/officials');
    }

    public function delete($id)
    {
        $this->Officials_model->delete($id);
        redirect('admin/officials');
    }
}
