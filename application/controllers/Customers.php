<?php
class Customers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Customer_model');
    }

    public function index() {
        $data['customers'] = $this->Customer_model->get_customers();
        $this->load->view('customers/index', $data);
    }

    public function create() {
        if ($_POST) {
            $data = [
                'full_name' => $this->input->post('full_name'),
                'last_name' => $this->input->post('last_name'),
                'address' => $this->input->post('address'),
                'contact_number' => $this->input->post('contact_number'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            ];
            $this->Customer_model->insert_customer($data);
            redirect('customers');
        }
        $this->load->view('customers/create');
    }

    public function edit($id) {
        $data['customer'] = $this->Customer_model->get_customer($id);
        if ($_POST) {
            $update = [
                'full_name' => $this->input->post('full_name'),
                'last_name' => $this->input->post('last_name'),
                'address' => $this->input->post('address'),
                'contact_number' => $this->input->post('contact_number'),
                'email' => $this->input->post('email')
            ];
            if (!empty($this->input->post('password'))) {
                $update['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            }
            $this->Customer_model->update_customer($id, $update);
            redirect('customers');
        }
        $this->load->view('customers/edit', $data);
    }

    public function delete($id) {
        $this->Customer_model->delete_customer($id);
        redirect('customers');
    }
}
