<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin_model');
	}
	public function index(){
		if ($this->session->userdata('is_admin')){
			$data['admin']=$this->admin_model->take()->result();
			$this->load->view('view_header');
			$this->load->view('view_menu');
			$this->load->view('view_admin',$data);
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
		$data['status']=$this->admin_model->status();
		$this->load->view('view_header');
		$this->load->view('view_menu');
		$this->load->view('view_admin_input',$data);
		$this->load->view('view_footer');
	}
	public function action(){
		$NIP=$this->input->post('nip');
		$Password=$this->input->post('password');
		$Status=$this->input->post('status');
		$data=array(
			'nip'=>$NIP,
			'passw'=>md5($Password),
			'status'=>$Status
			);
		$this->admin_model->input($data,'t_admin');
		redirect('admin/index');
	}
	public function edit($nip){
		$where=array('nip'=>$nip);
		//$data=array();
		$data['admin']=$this->admin_model->edit($where,'t_admin')->result();
		$data['status']=$this->admin_model->status();
		$this->load->view('view_header');
		$this->load->view('view_menu');
		$this->load->view('view_admin_edit',$data);
		$this->load->view('view_footer');
	}
	public function update(){
		$NIP=$this->input->post('nip');
		$Status=$this->input->post('status');
		$data=array(
			'nip'=>$NIP,
			'status'=>$Status
			);
		$where=array(
			'nip'=>$NIP
			);
		$this->admin_model->update($where, $data,'t_admin');
		redirect('admin');
	}
	public function delete($nip){
		$where=array('nip'=>$nip);
		$this->admin_model->delete($where,'t_admin');
		redirect('admin');
	}
}