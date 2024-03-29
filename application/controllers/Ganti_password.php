<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ganti_password extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model("autentikasi_model");
	}
	public function index()
	{
		$data = array();
		
		$error = empty($this->session->flashdata('error')) ? "" : $this->session->flashdata('error');
		$data["error"] = $error;
		$success = empty($this->session->flashdata('success')) ? "" : $this->session->flashdata('success');
		$data["success"] = $success;
		$this->load->view('view_header');
		$this->load->view('view_menu');
		$this->load->view('view_ganti_password', $data);
		$this->load->view('view_footer');
	}
	public function update()
	{
		$password1 = $this->input->post('password1');
		$password2 = $this->input->post('password2');
		if($password1 == $password2) {
			$this->autentikasi_model->update_password($this->session->userdata('nip'),md5($password2));
			$this->session->set_flashdata('success',"password berhasil dirubah");
			redirect(base_url("index.php/ganti_password"));
		}
		else {
			$this->session->set_flashdata('error',"password baru tidak sama");
			redirect(base_url("index.php/ganti_password"));
		}
	}
}