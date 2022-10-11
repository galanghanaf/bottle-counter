<?php

class Counter_model extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
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

    public function getAllDataBotol()
    {
        $this->db->select("*");
        $this->db->from("data_botol");
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function getSupervisor()
    {
        $this->db->select("*");
        $this->db->from("data_supervisor");
        $this->db->order_by("name", "asc");
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllDataSupervisor()
    {
        $this->db->select("*");
        $this->db->from("data_supervisor");
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllDataUser()
    {
        $this->db->select("*");
        $this->db->from("user");
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }
}
