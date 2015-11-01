<?php 

class Dlops extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('dlops_model');


	}

	public function show_all_dlops() 
	{
		
		$data['all_dlops'] = $this->dlops_model->get_all_dlops();

		$this->load->view('dlops/all_dlops', $data);

	}//end show_all_dlops

	public function add_dlop_show() {
		$this->load->library('form_validation');
		$this->loadd->view('add_dlop_show');
	}//end show_all_dlops
	
	public function add_dlop()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name (of dlop)', 'required');

		if ($this->form_validation->run() === FALSE) 
		{
			$this->add_dlop_show();
		} else {
			$this->dlops_model->add_dlop();
			$this->show_all_dlops();
		}
	}//end add_dlops

	
}

?>