<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Silahkan login terlebih dahulu!</strong></div>');
            redirect('auth/logout2');
        }
    }



    public function index()
    {
        $data['title'] = "Botol Treatment";
        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata('email')]
        )->row_array();

        $data['data_botol'] = $this->Counter_model->getAllDataBotol();
        $this->load->view('user/index', $data);
    }

    public function inputbotol()
    {
        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata('email')]
        )->row_array();

        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('shift', 'Shift', 'required');
        $this->form_validation->set_rules('date_created', 'Tanggal', 'required');


        if ($this->form_validation->run() == false) {
            $data['title'] = "COUNTER BOTTLE TREATMENT";
            $data['data_supervisor'] = $this->Counter_model->getAllDataSupervisor();
            $this->load->view('user/inputbotol', $data);
        } else {
            $data = [
                'name'                          => htmlspecialchars($this->input->post('name', true)),
                'shift'                         => htmlspecialchars($this->input->post('shift', true)),
                'botolkotordarichecker'         => $this->input->post('botolkotordarichecker'),
                'botolkosongdarivisualkosong'   => $this->input->post('botolkosongdarivisualkosong'),
                'botolyangmasuktreatment'       => $this->input->post('botolyangmasuktreatment'),
                'botolyangbisaditreatment'      => $this->input->post('botolyangbisaditreatment'),
                'date_created'                  => $this->input->post('date_created')

            ];

            $this->db->insert('data_botol', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Botol Berhasil Ditambahkan!</strong>
            </div>');
            redirect('user');
        }
    }

    public function exportbotol()
    {
        $data['title'] = "DATA BOTOL TREATMENT HOD";
        $data['data_botol'] = $this->Counter_model->getAllDataBotol();
        $this->load->view('user/exportbotol', $data);
    }
    public function myprofile()
    {
        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata('email')]
        )->row_array();

        $data['title'] = "Profil Saya";

        $this->load->view('user/myprofile', $data);
    }
    public function editmyprofile()
    {
        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata('email')]
        )->row_array();

        $this->form_validation->set_rules('name', 'Nama', 'required');


        if ($this->form_validation->run() == false) {
            $data['title'] = "Mengubah Profil Saya";
            $this->load->view('user/editmyprofile', $data);
        } else {

            $name  = $this->input->post('name', true);
            $email = $this->input->post('email', true);


            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Profil Berhasil Diubah!</strong>
            </div>');
            redirect('user/myprofile');
        }
    }
}
