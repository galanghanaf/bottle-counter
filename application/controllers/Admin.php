<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Silahkan login terlebih dahulu!</strong></div>');
            redirect('auth/logout2');
        }
    }
    public function index()
    {

        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata('email')]
        )->row_array();

        $data['title'] = "BOTOL TREATMENT";
        $data['title2'] = "HOD";


        $data['data_botol'] = $this->Counter_model->getAllDataBotol();
        $this->load->view('admin/index', $data);
    }

    public function inputuser()
    {

        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata('email')]
        )->row_array();

        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already used!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]', [
            'min_length' => 'Password to short!',
            'matches' => 'Password dont match!',
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', []);


        if ($this->form_validation->run() == false) {
            $data['title'] = "TAMBAH DATA USER";
            $data['data_user'] = $this->Counter_model->getAllDataUser();
            $this->load->view('admin/inputuser', $data);
        } else {
            $data = [
                'name'          => htmlspecialchars($this->input->post('name', true)),
                'email'         => htmlspecialchars($this->input->post('email', true)),
                'image'         => 'default.jpg',
                'password'      => $this->input->post('password1'),
                'role_id'       => 2,
                'is_active'     => 1,
                'date_created'  => time(),
                'date_changed'  => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Nama Berhasil Ditambahkan!</strong>
            </div>');
            redirect('admin/inputuser');
        }
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
            $data['data_supervisor'] = $this->Counter_model->getSupervisor();
            $this->load->view('admin/inputbotol', $data);
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
            redirect('admin');
        }
    }

    public function inputsupervisor()
    {
        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata('email')]
        )->row_array();

        $this->form_validation->set_rules('name', 'Nama', 'required|is_unique[data_supervisor.name]', [
            'is_unique' => 'This name has already used!'
        ]);


        if ($this->form_validation->run() == false) {
            $data['title'] = "TAMBAH DATA SUPERVISOR";
            $data['data_supervisor'] = $this->Counter_model->getAllDataSupervisor();
            $this->load->view('admin/inputsupervisor', $data);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'date_created'  => time(),
                'date_changed'  => time()

            ];

            $this->db->insert('data_supervisor', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Supervisor Berhasil Ditambahkan!</strong>
            </div>');
            redirect('admin/inputsupervisor');
        }
    }


    public function editbotol($id)
    {
        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata('email')]
        )->row_array();
        $data['title'] = "COUNTER BOTTLE TREATMENT";
        $data['data_supervisor'] = $this->Counter_model->getSupervisor();
        $data['data_botol'] = $this->db->query("SELECT * FROM data_botol WHERE id='$id'")->result();
        $this->load->view('admin/editbotol', $data);
    }
    public function editbotolaksi()
    {
        $this->_rulesbotol(); //function ini berfungsi untuk melakukan form_validation
        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambahData
            redirect('admin');
        } else {
            $id                              = $this->input->post('id');
            $name                            = $this->input->post('name');
            $shift                           = $this->input->post('shift');
            $botolkotordarichecker           = $this->input->post('botolkotordarichecker');
            $botolkosongdarivisualkosong     = $this->input->post('botolkosongdarivisualkosong');
            $botolyangmasuktreatment         = $this->input->post('botolyangmasuktreatment');
            $botolyangbisaditreatment        = $this->input->post('botolyangbisaditreatment');
            $date_created                    = $this->input->post('date_created');

            $data = array(
                'name'                          => $name,
                'shift'                         => $shift,
                'botolkotordarichecker'         => $botolkotordarichecker,
                'botolkosongdarivisualkosong'   => $botolkosongdarivisualkosong,
                'botolyangmasuktreatment'       => $botolyangmasuktreatment,
                'botolyangbisaditreatment'      => $botolyangbisaditreatment,
                'date_created'                  => $date_created,

            );

            $where = array(
                'id' => $id
            );
            $this->Counter_model->update_data('data_botol', $data, $where);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate!</strong>
            </div>');
            redirect('admin');
        }
    }

    public function editsupervisor($id)
    {
        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata('email')]
        )->row_array();
        $data['title'] = "UBAH DATA SUPERVISOR";
        $data['data_supervisor'] = $this->db->query("SELECT * FROM data_supervisor WHERE id='$id'")->result();
        $this->load->view('admin/editsupervisor', $data);
    }
    public function editsupervisoraksi()
    {
        $this->_rulessupervisor(); //function ini berfungsi untuk melakukan form_validation
        if ($this->form_validation->run() == FALSE) { //disini apabila form yang sudah kita buat ternyata pada saat di validasi false maka, akan dikembalikan ke tambahData
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Yang Anda Inputkan, Telah Digunakan!</strong></div>');
            redirect('admin/inputsupervisor');
        } else {
            $id                              = $this->input->post('id');
            $name                            = $this->input->post('name');
            $date_created                    = $this->input->post('date_created');
            $date_changed                    = time();

            $data = array(
                'name'                       => $name,
                'date_created'               => $date_created,
                'date_changed'               => $date_changed,
            );

            $where = array(
                'id' => $id
            );
            $this->Counter_model->update_data('data_supervisor', $data, $where);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Supervisor Berhasil Diupdate!</strong>
            </div>');
            redirect('admin/inputsupervisor');
        }
    }

    public function edituser($id)
    {
        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata('email')]
        )->row_array();
        $data['title'] = "UBAH DATA USER";
        $data['data_edituser'] = $this->db->query("SELECT * FROM user WHERE id='$id'")->result();
        $this->load->view('admin/edituser', $data);
    }
    public function edituseraksi()
    {
        $this->_rulesuser();
        if ($this->form_validation->run() == FALSE) {
            redirect('admin/inputuser');
        } else {
            $id                                 = $this->input->post('id');
            $name                               = $this->input->post('name');
            $password                           = $this->input->post('password');
            $email                              = $this->input->post('email');
            $image                              = $this->input->post('image');
            $role_id                            = $this->input->post('role_id');
            $is_active                          = $this->input->post('is_active');
            $date_created                       = $this->input->post('date_created');
            $date_changed                       = time();

            $data = array(
                'name'                              => $name,
                'email'                             => $email,
                'password'                          => $password,
                'image'                             => $image,
                'role_id'                           => $role_id,
                'is_active'                         => $is_active,
                'date_created'                      => $date_created,
                'date_changed'                      => $date_changed,

            );

            $where = array(
                'id' => $id
            );
            $this->Counter_model->update_data('user', $data, $where);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Nama Karyawan Berhasil Diupdate!</strong>
            </div>');
            redirect('admin/inputuser');
        }
    }
    public function _rulesbotol()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('shift', 'Shift', 'required');
        $this->form_validation->set_rules('date_created', 'Tanggal', 'required');
    }

    public function _rulesuser()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required');
    }

    public function _rulessupervisor()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|is_unique[data_supervisor.name]', [
            'is_unique' => 'This name has already used!'
        ]);
    }


    public function deletebotol($id)
    {
        $where = array('id' => $id);
        $this->Counter_model->delete_data($where, 'data_botol');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Botol Berhasil Dihapus!</strong></div>');
        redirect('admin');
    }

    public function deleteuser($id)
    {
        $where = array('id' => $id);
        $this->Counter_model->delete_data($where, 'user');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data User Berhasil Dihapus!</strong></div>');
        redirect('admin/inputuser');
    }

    public function deletesupervisor($id)
    {
        $where = array('id' => $id);
        $this->Counter_model->delete_data($where, 'data_supervisor');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Supervisor Berhasil Dihapus!</strong></div>');
        redirect('admin/inputsupervisor');
    }

    public function exportbotol()
    {
        $data['title'] = "DATA BOTOL TREATMENT HOD";
        $data['data_botol'] = $this->Counter_model->getAllDataBotol();
        $this->load->view('admin/exportbotol', $data);
    }

    public function exportuser()
    {
        $data['title'] = "DATA USER";
        $data['data_user'] = $this->Counter_model->getAllDataUser();
        $this->load->view('admin/exportuser', $data);
    }

    public function exportsupervisor()
    {
        $data['title'] = "DATA SUPERVISOR";
        $data['data_supervisor'] = $this->Counter_model->getAllDataSupervisor();
        $this->load->view('admin/exportsupervisor', $data);
    }

    public function myprofile()
    {
        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata('email')]
        )->row_array();
        $data['title'] = "Profil Saya";


        $this->load->view('admin/myprofile', $data);
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
            $this->load->view('admin/editmyprofile', $data);
        } else {

            $name  = $this->input->post('name', true);
            $email = $this->input->post('email', true);


            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Profil Berhasil Diubah!</strong>
            </div>');
            redirect('admin/myprofile');
        }
    }
}
