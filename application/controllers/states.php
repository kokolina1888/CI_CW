<?php 
class States extends CI_Controller {
	
	public $countries = array('USA' => 60000000, 'China' => 5000000, 'Bulgaria' => 7000000);

	public function stat(){
		$st['states'] = $this->countries;
		$this->load->view('view4', $st);
	}

	public function stat1(){
		$st['states'] = $this->countries;
		$this->load->view('view5', $st);
	}
}

?>