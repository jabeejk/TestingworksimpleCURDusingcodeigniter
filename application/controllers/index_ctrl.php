<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index_ctrl extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->model('db_model');
	}


	public function index()
	{
		$this->load->view('index_view_page1');
		
	}

	public function set_value()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','required|alpha|min_length[3]|is_unique[detailss.name]');
		$this->form_validation->set_rules('pwd', 'Password', 'required');
		$this->form_validation->set_rules('add','Valid Address','required|alpha_numeric_spaces|min_length[5]|max_length[255]');
		$this->form_validation->set_rules('date_','Correct Date','required|alpha_dash');

		if($this->form_validation->run())
		{
			
			$value = array(

				'name'=>$this->input->post('name'),
				'password'=>$this->input->post('pwd'),
				'address'=>$this->input->post('address'),
				'date_'=>$this->input->post('date_')
			);
			$result = $this->db_model->ins_value($value);
		 	
		 	if($result)
		 	{
		 		$this->session->set_flashdata('msg','Your data has been inserted');
		 	}
		 	else
		 	{
		 		$this->session->set_flashdata('error','Please check the info');
		 	}
		 	redirect(base_url('index.php/index_ctrl'));
		}	
		else
		{
			$this->index();			
		}

	}

	public function view_data()
	{
		
		$data['fields'] = $this->db_model->view_info();
		$this->load->view('view_details',$data);

	}


	public function Edit_process()
	{
		$value = $this->uri->segment(3);

		$data['value'] = $this->db_model->edit_info($value);

		$this->load->view('edit_data',$data);
	}

	public function update_value()
	{
		$id=$this->input->post('id_');
		$data = array(
				'name'=>$this->input->post('name'),
				'address'=>$this->input->post('address'),
				'date_'=>$this->input->post('date_')
		);

		
		$info =	$this->db_model->up($data,$id);

		if($info)
		{
			$this->session->set_flashdata('msg','Your data has been updated');
		}
		else
		{
			$this->session->set_flashdata('error','Data has not been updated');
		}
		redirect(base_url('index.php/index_ctrl/Edit_process'));
	}
	


}
