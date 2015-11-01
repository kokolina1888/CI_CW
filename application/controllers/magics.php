<?php 

class Magics extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('magics_model');

	}

	public function show_all_magics() 
	{
		
		$data['all_magics'] = $this->magics_model->get_all_magics();

		$this->load->view('magic\all_magics', $data);

	}//end show_all_magics


	public function show_single_magic($magic_id)
	{
		$data['single_magic'] = $this->magics_model->get_single_magic($magic_id);
		$this->load->view('magic\single_magic', $data);


	}//end of show_single_magic

	public function add_magic_show() {

		$this->load->library('form_validation');
		$this->load->view('magic/add_magic_show');

	}//end add_magic_show
	
	public function add_magic()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('magic', 'Magic', 'required');
		$this->form_validation->set_rules('words', 'Words', 'required');

		if ($this->form_validation->run() === FALSE) 
		{
			$this->add_magic_show();
		} else {
			$this->magics_model->add_magic();
			$this->show_all_magics();
			echo '<a href="'.base_url().'index.php/magics/add_magic_show">Add another Magic</a>';
		}
	}//end add_magics

	public function show_update_magic($magic_id)
	{
		$data['single_magic'] = $this->magics_model->get_single_magic($magic_id);
		$this->load->view('magic\update_magic', $data);

	}//show_update_magic

	public function update_magic()
	{
		
		$this->magics_model->update_m();
	}



}

?>