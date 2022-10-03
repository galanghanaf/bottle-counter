<?php

class Welcome extends CI_Controller
{
	public function index()
	{
		$data['title'] = "BOTOL TREATMENT";
		$data['title2'] = "HOD";


		$data['data_botol'] = $this->Counter_model->getAllDataBotol();
		$this->load->view('welcome', $data);
	}
	public function exportdatabotol()
	{
		$data['title'] = "DATA BOTOL TREATMENT HOD";
		$data['data_botol'] = $this->Counter_model->getAllDataBotol();
		$this->load->view('exportDataBotol', $data);
	}
	public function exportdatanama()
	{
		$data['title'] = "DATA NAMA KARYAWAN";
		$data['data_nama'] = $this->Counter_model->getAllDataNama();
		$this->load->view('exportDataNama', $data);
	}
	public function addDataBotol()
	{
		$data['title'] = "COUNTER BOTOL TREATMENT";
		$data['data_nama'] = $this->Counter_model->get_data('data_nama')->result();
		$this->load->view('formAddDataBotol', $data);
	}
	public function addDataAction()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->addDataBotol();
		} else {
			$id            					= $this->input->post('id');
			$name    						= $this->input->post('name');
			$shift    						= $this->input->post('shift');
			$botolkotordarichecker    		= $this->input->post('botolkotordarichecker');
			$botolkosongdarivisualkosong    = $this->input->post('botolkosongdarivisualkosong');
			$botolyangmasuktreatment    	= $this->input->post('botolyangmasuktreatment');
			$botolyangbisaditreatment    	= $this->input->post('botolyangbisaditreatment');
			$botolyangtidakbisaditreatment  = $this->input->post('botolyangtidakbisaditreatment');
			$createdAt    					= $this->input->post('createdAt');



			$data = array(
				'name'   						=> $name,
				'shift'   						=> $shift,
				'botolkotordarichecker'  		=> $botolkotordarichecker,
				'botolkosongdarivisualkosong'   => $botolkosongdarivisualkosong,
				'botolyangmasuktreatment'   	=> $botolyangmasuktreatment,
				'botolyangbisaditreatment'      => $botolyangbisaditreatment,
				'botolyangtidakbisaditreatment' => $botolyangtidakbisaditreatment,
				'createdAt'   					=> $createdAt,


			);

			$this->Counter_model->insert_data($data, 'data_botol');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Botol Berhasil Ditambahkan!</strong>
            </div>');
			redirect('welcome');
		}
	}

	public function addDataNama()
	{
		$data['title'] = "TAMBAH DATA NAMA KARYAWAN";
		$data['data_nama'] = $this->Counter_model->getAllDataNama();
		$this->load->view('formAddDataNama', $data);
	}
	public function addDataNamaAction()
	{
		$this->_rules2();

		if ($this->form_validation->run() == FALSE) {
			$this->addDataNama();
		} else {
			$id            					= $this->input->post('id');
			$name    						= $this->input->post('name');

			$data = array(
				'name'   						=> $name,
			);

			$this->Counter_model->insert_data($data, 'data_nama');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Nama Berhasil Ditambahkan!</strong>
            </div>');
			redirect('welcome/addDataNama');
		}
	}



	public function _rules()
	{
		$this->form_validation->set_rules('name', 'Nama', 'required');
		$this->form_validation->set_rules('createdAt', 'Tanggal', 'required');
		$this->form_validation->set_rules('shift', 'Shift', 'required');
	}

	public function _rules2()
	{
		$this->form_validation->set_rules('name', 'Nama', 'required|trim|is_unique[data_nama.name]');
	}

	public function deleteDataBotol($id)
	{
		$where = array('id' => $id);
		$this->Counter_model->delete_data($where, 'data_botol');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Botol Berhasil Dihapus!</strong></div>');
		redirect('welcome');
	}
	public function deleteDataNama($id)
	{
		$where = array('id' => $id);
		$this->Counter_model->delete_data($where, 'data_nama');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Nama Berhasil Dihapus!</strong></div>');
		redirect('welcome/addDataNama');
	}
}
