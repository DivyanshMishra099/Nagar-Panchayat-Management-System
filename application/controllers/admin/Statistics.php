<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistics extends CI_Controller
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
        $data['page_title'] = 'Manage Statistics';
        $data['items'] = array();
        if ($this->db->table_exists('tbl_statistics')) {
            $data['items'] = $this->db->order_by('id', 'DESC')->get('tbl_statistics')->result();
        }
        $this->load->view('admin/layout', array('page' => 'admin/statistics/index', 'data' => $data));
    }

    public function save()
    {
        if ($this->db->table_exists('tbl_statistics')) {
            $id = $this->input->post('id', TRUE);
            $data = array();
            if ($this->db->field_exists('title', 'tbl_statistics')) {
                $data['title'] = $this->input->post('title', TRUE);
            }
            if ($this->db->field_exists('value', 'tbl_statistics')) {
                $data['value'] = $this->input->post('value', TRUE);
            }
            if ($this->db->field_exists('icon', 'tbl_statistics')) {
                $data['icon'] = $this->input->post('icon', TRUE);
            }
            if (!empty($data)) {
                if (!empty($id)) {
                    $this->db->where('id', $id)->update('tbl_statistics', $data);
                } else {
                    $this->db->insert('tbl_statistics', $data);
                }
            }
        }
        redirect('admin/statistics');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Statistic';
        $data['item'] = $this->db->where('id', $id)->get('tbl_statistics')->row();
        $data['items'] = $this->db->order_by('id', 'DESC')->get('tbl_statistics')->result();
        $this->load->view('admin/layout', array('page' => 'admin/statistics/index', 'data' => $data));
    }

    public function delete($id)
    {
        if ($this->db->table_exists('tbl_statistics')) {
            $this->db->where('id', $id)->delete('tbl_statistics');
        }
        redirect('admin/statistics');
    }
}
