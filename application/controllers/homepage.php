<?php


/**
 * Our homepage used to create events.
 */
class Homepage extends CI_Controller {


	public function __construct(){

		parent::__construct();	

		// Ensure the form helper has been loaded.
		$this->load->helper('form');	
	
	}


	// Display a form on the homepage for new events.
	public function index(){

		// Get the form creation.
		$create_form = $this->load->view('create_event', null, true);

		// Load the form in our standard template.
		$this->load->view(
			'layout',
			array(
				'title' => 'test',
				'content' => $create_form,
			)
		);

	}


	// Used for the creation of new events.
	public function create(){

		

	}

}