<?php
class Customer_model extends CI_Model {

    public function get_customers() {
        return $this->db->get('customers')->result();
    }

    public function insert_customer($data) {
        return $this->db->insert('customers', $data);
    }

    public function get_customer($id) {
        return $this->db->get_where('customers', ['id' => $id])->row();
    }

    public function update_customer($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('customers', $data);
    }

    public function delete_customer($id) {
        return $this->db->delete('customers', ['id' => $id]);
    }
}
