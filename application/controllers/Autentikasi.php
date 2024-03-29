<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Autentikasi extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('session',['auth','form_validation']);
		$this->load->helper('url');
		$this->load->model("Autentikasi_model");
	}
	public function index()
	{
		$data 			= array();
		$error 			= empty($this->session->flashdata('error'))?"":$this->session->flashdata('error');
		$data["error"] 	= $error;
		$this->load->view('Autentikasi_view', $data);
	}
	public function login()
	{
		$nip = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->Autentikasi_model->cek_autentikasi($nip, md5($password));
		if($result["valid_user"]){
			$user = $result["data_user"];
			$data_session = array(
			'id'=>$user->id,
			'is_admin' => $result['is_admin']
			);
			$this->session->set_userdata($data_session);

			if ($result['is_admin']) {
				redirect(base_url("index.php/Admin"));
			}
			else{
				redirect(base_url("index.php/Rapat"));
			}
		

		}
		else{
			$this->session->set_flashdata('error',"Username dan Password yang Anda masukkan tidak ditemukan");
			redirect(base_url());
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}