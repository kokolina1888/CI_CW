<?php 
class First extends CI_Controller {

	

	public function method1()
	{
		echo "Hello, CI";
	}

	public function print1() 
	{
		echo "Hi";
	}
	public function param($greet) 
	{
		echo "<h2>$greet</h2>";
	}

	public function info()
	{
		echo "I am using Codeigniter!";
	}

	public function tags() 
	{
		echo "<h2>I am a title</h2>";
		echo "<div>I am a div Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est facere, omnis alias earum, praesentium obcaecati amet! Doloremque corrupti, officiis amet esse tempore quibusdam repellat. Corporis unde, mollitia autem exercitationem recusandae.</div>";
	}

	public function show1() {
		

		$data['title'] = "This is a view 1";
		$data['content'] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio voluptas ipsum maxime obcaecati accusamus cumque, hic quo! Eaque, deleniti porro voluptatibus accusantium consequuntur consequatur maxime, accusamus enim impedit et mollitia.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic possimus ducimus id consequatur quis temporibus. Nisi quidem, tenetur incidunt sapiente, laudantium est asperiores optio autem, maiores libero accusamus vitae, quibusdam.';
		$this->load->view('view1', $data);
	}

	public function show_cars($var) {
		$cars['cars'] = array('Honda', 'BMW', 'VW');
		$this->load->view($var, $cars);
		
	}

	

}

?>