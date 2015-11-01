<?php 
class StateArray extends CI_Controller {
	
	public $countries = array(
		'USA' => array (
					'area' => 300,
					'president' => 'Trump',
					'capital' => 'Washington'),
		'USA1' => array (
					'area' => 3001,
					'president' => 'Trump1',
					'capital' => 'Washington'));

	public function area_print() {
		$st['states'] = $this->countries;
		$this->load->view('view6', $st);
	}
}

?>