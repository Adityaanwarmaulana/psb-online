<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

	public function index()
	{
		$data['web_psb'] = $this->web->web_utama();
		$this->load->view('web/index', $data);
	}

	public function idbaru($value = '')
	{
		echo $this->web->pendaftaran('id_baru');
	}

	public function pendaftaran()
	{
		$data = array(
			'id_daftar'			=> $this->web->pendaftaran('id_baru'),
			'web_psb'			=> $this->web->pendaftaran('status_psb'),
			'v_pdd'				=> $this->web->pendaftaran('v_pdd'),
			'v_penghasilan'		=> $this->web->pendaftaran('v_penghasilan'),
			'v_pekerjaan_ayah'	=> $this->web->pendaftaran('v_pekerjaan_ayah'),
			'v_komp'			=> $this->web->pendaftaran('v_komp'),
			'v_pekerjaan_ibu'	=> $this->web->pendaftaran('v_pekerjaan_ibu'),
			'v_pekerjaan_wali'	=> $this->web->pendaftaran('v_pekerjaan_wali')
		);

		if ($data['web_psb']->status_psb == 'tutup') {
			redirect('404');
		}

		$this->load->view('web/pendaftaran', $data);

		if (isset($_POST['btndaftar'])) {
			// var_dump($this->input->post()); exit();
			$acts = $this->web->pendaftaran('daftar', $this->input);
			// 

			$this->session->set_userdata('no_pendaftaran', $this->input->post('nis'));
			redirect('panel_santri');
		}
	}

	public function logcs()
	{
		$data['web_psb'] = $this->web->pendaftaran('status_psb');
		if ($data['web_psb']->status_psb == 'tutup') {
			redirect('404');
		}

		if ($this->session->userdata('no_pendaftaran') != NULL) {
			redirect('panel_santri');
		} else {
			$this->load->view('web/index', $data);

			if (isset($_POST['btnlogin'])) {
				$send = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
				);
				$auth = $this->web->auth('cek-masuk', $send);

				if ($auth['sum'] == 0) {
					$this->session->set_flashdata('msg', $this->err->wrong_auth());
					redirect('logcs');
				} else {
					$this->session->set_userdata('no_pendaftaran', $auth['res']->no_pendaftaran);
					redirect('panel_santri');
				}
			}
		}
	}

	public function cari()
	{
		$data['santri'] = $this->SantriModel->view();
		$this->load->view('web/cari', $data);
	}


	function error_not_found()
	{
		$this->load->view('404_content');
	}
}
