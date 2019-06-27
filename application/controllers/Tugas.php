<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('tugas_model');
	}

	public function index(){
		$data['tugas']=$this->tugas_model->take()->result();
		$this->load->view('view_header');
		$this->load->view('view_menu');
		$this->load->view('view_tugas',$data);
		$this->load->view('view_footer');
	}

	public function add(){
		$data['tugas']=$this->tugas_model->input();
		$this->load->view('view_header');
		$this->load->view('view_menu');
		$this->load->view('view_tugas_input',$data);
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

		$this->tugas_model->input_data($data,'tugas');
		redirect('tugas');
	}

	public function edit($nip){
		$where=array('nip'=>$nip);
		//$data=array();
		$data['t_task']=$this->tugas_model->edit($where,'t_task')->result();

		$this->load->view('view_header');
		$this->load->view('view_menu');
		$this->load->view('view_tugas_edit',$data);
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

		$this->tugas_model->update($where, $data,'t_task');
		redirect('tugas/index');
	}
	public function delete($nip){
		$where=array('nip'=>$nip);
		$this->tugas_model->delete($where,'t_task');
		redirect('index.php/tugas');
	}
}