<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model("profil_model");
	}

	public function index() {
		if (!$this->session->userdata('is_admin')) {
			$data = array();
			$profil = $this->profil_model->get($this->session->userdata('id'));
			$data["profil"] = $profil;
			
			$success = empty($this->session->flashdata('success')) ? "" : $this->session->flashdata('success');
			$data["success"] = $success;

			$error = empty($this->session->flashdata('error')) ? "" : $this->session->flashdata('error');
			$data["error"] = $error;

			$this->load->view('view_header');
			$this->load->view('view_menu');
			$this->load->view('view_profil', $data);
			$this->load->view('view_footer');
		}
		else{
			$this->load->view('view_header');
			$this->load->view('view_menu');
			$this->load->view('view_404');
			$this->load->view('view_footer');
		}

	}

	public function update()
	{
		$id = $this->session->userdata('id');
		$username = $this->input->post('username');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$nohp = $this->input->post('nohp');

		$this->profil_model->update($id,$username,$nama,$email,$nohp);
		$this->session->set_flashdata('success',"profil berhasil dirubah");
		redirect(base_url("index.php/profil"));
	}
}
