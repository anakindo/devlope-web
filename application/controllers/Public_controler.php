<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_controler extends CI_Controller {
	function __construct(){
		parent:: __construct();
}
	function index(){
		$data['title'] 	= 'PT Asia Resource System - IT Solution Provider';
		$data['main'] 	= 'front/index.php';
 		$this->load->view('front/index', $data);
	}
	public function navbar(){
		$data['title'] 	= 'PT Asia Resource System - IT Solution Provider';
		$data['main'] 	= 'front/part/navbar.php';
 		$this->load->view('front/index', $data);
	}
	public function slider(){
		$data['title'] 	= 'PT Asia Resource System - IT Solution Provider';
		$data['main'] 	= 'front/part/slider.php';
 		$this->load->view('front/index', $data);
	}
	public function section(){
		$data['title'] 	= 'PT Asia Resource System - IT Solution Provider';
		$data['main'] 	= 'front/part/section.php';
 		$this->load->view('front/index', $data);
	}
	public function service(){
		$data['title'] 	= 'PT Asia Resource System - IT Solution Provider';
		$data['main'] 	= 'front/part/service.php';
 		$this->load->view('front/index', $data);
	}
	public function work(){
		$data['title'] 	= 'PT Asia Resource System - IT Solution Provider';
		$data['main'] 	= 'front/part/work.php';
 		$this->load->view('front/index', $data);
	}
	public function team(){
		$data['title'] 	= 'PT Asia Resource System - IT Solution Provider';
		$data['main'] 	= 'front/part/team.php';
 		$this->load->view('front/index', $data);
	}
	public function testi(){
		$data['title'] 	= 'PT Asia Resource System - IT Solution Provider';
		$data['main'] 	= 'front/part/testi.php';
 		$this->load->view('front/index', $data);
	}
	public function blog(){
		$data['title'] 	= 'PT Asia Resource System - IT Solution Provider';
		$data['main'] 	= 'front/part/blog.php';
 		$this->load->view('front/index', $data);
	}
	public function client(){
		$data['title'] 	= 'PT Asia Resource System - IT Solution Provider';
		$data['main'] 	= 'front/part/client.php';
 		$this->load->view('front/index', $data);
	}
	public function footer(){
		$data['title'] 	= 'PT Asia Resource System - IT Solution Provider';
		$data['main'] 	= 'front/part/footer.php';
 		$this->load->view('front/index', $data);
	}
}
?>