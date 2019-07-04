<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Umum extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('umum_model');
	}
	public function index(){
		if (!$this->session->userdata('is_admin')){
			$idJenis = $this->uri->segment(3);
			$data['umum']=$this->umum_model->take($idJenis)->result();
			$this->load->view('view_header');
			$this->load->view('view_menu');
			$this->load->view('view_umum',$data);
			$this->load->view('view_footer');
		}
		else{
			$this->load->view('view_header');
			$this->load->view('view_menu');
			$this->load->view('view_404');
			$this->load->view('view_footer');
		}

	}

	// public function show()
	// {
		
	// }

	public function add(){
		$data['umum']=$this->umum_model->take()->result();
		$this->load->view('view_header');
		$this->load->view('view_menu');
		$this->load->view('view_umum',$data);
		$this->load->view('view_footer');
	}
	public function action(){
		$NIP=$this->input->post('nip');
		$Password=$this->input->post('password');
		$Status=$this->input->post('status');
		$data=array(
			'nip'=>$NIP,
			'passw'=>$Password,
			'status'=>$status
			);
		$this->umum_model->input_data($data,'umum');
		redirect('umum');
	}
	public function edit($nip){
		$where=array('nip'=>$nip);
		//$data=array();
		$data['t_admin']=$this->umum_model->edit($where,'t_admin')->result();
		$this->load->view('view_header');
		$this->load->view('view_menu');
		$this->load->view('view_admin_edit',$data);
		$this->load->view('view_footer');
	}
	public function update(){
		$NIP=$this->input->post('nip');
		$Password=$this->input->post('password');
		$Status=$this->input->post('status');
		$id=$this->input->post('id');
		$data=array(
			'nip'=>$NIP,
			'passw'=>$Password,
			'status'=>$Status
			);
		$where=array(
			'nip'=>$id
			);
		$this->admin_model->update($where, $data,'t_admin');
		redirect('admin/index');
	}
	public function delete($nip){
		$where=array('nip'=>$nip);
		$this->admin_model->delete($where,'t_admin');
		redirect('index.php/admin');
	}
}