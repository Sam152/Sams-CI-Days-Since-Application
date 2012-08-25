<?php



class Homepage extends CI_Controller {


	public function __construct(){

		parent::__construct();
		$this->load->model('sams_model', 'sammy');
		
	}


	public function index(){


		$data = array(
			'person' => $this->sammy->get_sam()
		);

		$this->load->view('sam/sam', $data);

	}




}