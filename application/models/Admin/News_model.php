<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model
{
    private $table = 'tbl_news';

    public function get_latest_news()
    {
        return $this->db
            ->where('status',1)
            ->order_by('news_date','DESC')
            ->limit(5)
            ->get($this->table)
            ->result();
    }

    public function get_all()
    {
        return $this->db
            ->order_by('id','DESC')
            ->get($this->table)
            ->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table,$data);
    }

    public function update($id,$data)
    {
        return $this->db->where('id',$id)->update($this->table,$data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table,['id'=>$id]);
    }

    public function find($id)
    {
        return $this->db->get_where($this->table,['id'=>$id])->row();
    }
}