<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Operator extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('operator_model');
	}
	public function index(){
		if ($this->session->userdata('is_admin')){
			$data['operator']=$this->operator_model->take()->result();
			$this->load->view('view_header');		
			$this->load->view('view_menu');
			$this->load->view('view_operator',$data);
			$this->load->view('view_footer');
		}
		else{
			$this->load->view('view_header');
			$this->load->view('view_menu');
			$this->load->view('view_404');
			$this->load->view('view_footer');
		}
	}
	public function add(){
		$data['kppn'] = $this->operator_model->kppn();
		$data['status']=$this->operator_model->status();
		$this->load->view('view_header');
		$this->load->view('view_menu');
		$this->load->view('view_operator_input',$data);
		$this->load->view('view_footer');
	}
	public function action(){
		$username=$this->input->post('username');
		$Password=$this->input->post('password');
		$Kppn=$this->input->post('kppn');
		$Status=$this->input->post('status');
		$Nama=$this->input->post('nama');
		$Email=$this->input->post('email');
		$NoHP=$this->input->post('hp');
		$data=array(
			'useropr'=>$username,
			'passw'=>$Password,
			'kdkppn'=>$Kppn,
			'status'=>$Status,
			'nmopr'=>$Nama,
			'email'=>$Email,
			'nohp'=>$NoHP
			);
		$this->operator_model->input($data,'t_useropr');
		redirect('operator/index');
	}
	public function edit($username){
		$where=array('useropr'=>$username);
		//$data=array();
		$data['operator']=$this->operator_model->edit($where,'t_useropr')->result();
		$data['kppn']=$this->operator_model->kppn();
		$data['status']=$this->operator_model->status();
		$this->load->view('view_header');
		$this->load->view('view_menu');
		$this->load->view('view_operator_edit',$data);
		$this->load->view('view_footer');
	}
	public function update(){
		$Username=$this->input->post('username');
		$Nama=$this->input->post('nama');
		$Kppn=$this->input->post('kppn');
		$Status=$this->input->post('status');
		$Email=$this->input->post('email');
		$NoHP=$this->input->post('hp');
		$data=array(
			'useropr'=>$Username,
			'nmopr'=>$Nama,
			'kdkppn'=>$Kppn,
			'status'=>$Status,
			'email'=>$Email,
			'nohp'=>$NoHP
			);
		$where=array(
			'useropr'=>$Username
			);
		$this->operator_model->update($where, $data,'t_useropr');
		redirect('operator');
	}
	public function delete($username){
		$where=array('useropr'=>$username);
		$this->operator_model->delete($where,'t_useropr');
		redirect('operator/index');
	}
	public function eror(){
		$this->load->view('view_404');
	}
}