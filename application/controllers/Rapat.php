<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Rapat extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('rapat_model');
	}
	public function index(){
		if (!$this->session->userdata('is_admin')) {
			$data['rapat']=$this->rapat_model->take()->result();
			$this->load->view('view_header');
			$this->load->view('view_menu');
			$this->load->view('view_rapat',$data);
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
		$data['rapat']=$this->rapat_model->input();
		$this->load->view('view_header');
		$this->load->view('view_menu');
		$this->load->view('view_rapat_input',$data);
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
		$this->rapat_model->input_data($data,'rapat');
		redirect('rapat');
	}
	public function edit($nip){
		$where=array('nip'=>$nip);
		//$data=array();
		$data['t_rapat']=$this->rapat_model->edit($where,'t_rapat')->result();
		$this->load->view('view_header');
		$this->load->view('view_menu');
		$this->load->view('view_rapat_edit',$data);
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
		$this->rapat_model->update($where, $data,'t_rapat');
		redirect('rapat/index');
	}
	public function delete($nip){
		$where=array('nip'=>$nip);
		$this->rapat_model->delete($where,'t_rapat');
		redirect('index.php/rapat');
	}
}