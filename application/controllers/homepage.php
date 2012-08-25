<?php


/**
 * Our homepage used to create events.
 */
class Homepage extends CI_Controller {

	public function __construct(){
		parent::__construct();		
	}

	public function index(){

		$this->load->view(
			'layout',
			array(
				'title' => 'test',
				'content' => 'test',
			)
		);

	}

}