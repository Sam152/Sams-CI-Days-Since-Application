<?php


/**
 * Our homepage used to create events.
 */
class Homepage extends CI_Controller {


	public function __construct(){

		parent::__construct();	

		// Ensure the form helper has been loaded.
		$this->load->helper('form');

		// Ensure we have the form validation library
		$this->load->library('form_validation');	
	
	}


	// Display a form on the homepage for new events.
	public function index(){

		// Ensure our event name is filled out.
		$this->form_validation->set_rules('event_name', 'Event Name', 'required');
		
		// Ensure our event time is filled out.
		$this->form_validation->set_rules('event_time', 'Event Time', 'required');

		// If our form has been fully validated
		if($this->form_validation->run() === TRUE){

			// Load our event object
			$this->load->model('Event', 'event');

			$this->event->create('test', 'test2');


		}else{

			// Get the form creation.
			$create_event = $this->load->view('create_event', null, true);

			// Load the form in our standard template.
			$this->load->view(
				'layout',
				array(
					'title' => 'test',
					'content' => $create_event,
				)
			);

		}

	}


}