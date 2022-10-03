<?php

//untuk menampilkan data, dibutuhkan model
class Counter_model extends CI_Model
{
    public function get_data($table)
    {

        return $this->db->get($table);
    }

    // Opening 
    public function getAllDataBotol()
    {
        $this->db->select("*");
        $this->db->from("data_botol");
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }



    // End 

    // Opening 
    public function getAllDataNama()
    {
        $this->db->select("*");
        $this->db->from("data_nama");
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }



    public function insert_data($data, $table)
    {
        $orig_debug = $this->db->db_debug;
        $this->db->db_debug = FALSE;

        if ($this->db->insert($table, $data)) {
            $this->db->db_debug = $orig_debug;
            return true;
        } else {
            $this->db->db_debug = $orig_debug;
            return false;
        }
    }

    public function update_data($table, $data, $where)
    {
        $orig_debug = $this->db->db_debug;
        $this->db->db_debug = FALSE;

        if ($this->db->update($table, $data, $where)) {
            $this->db->db_debug = $orig_debug;
            return true;
        } else {
            $this->db->db_debug = $orig_debug;
            return false;
        }
    }



    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function insert_batch($table = null, $data = array())
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->insert_batch($table, $data);
        }
    }
    public function cek_login($where, $table)
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db->where('username', $username)
            ->where('password', $password)
            ->limit(1)
            ->get('data_admin');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
}
