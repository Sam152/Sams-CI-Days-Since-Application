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
		$this->form_validation->set_rules(
			'event_name',
			'Event Name',
			'required'
		);
		
		// Ensure our event time is filled out.
		$this->form_validation->set_rules(
			'event_time',
			'Event Time',
			'required|callback_check_event_timestamp'
		);

		// Check our password was filled out correctly.
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|callback_check_password'
		);

		// If our form has been fully validated
		if($this->form_validation->run() === TRUE){

			// Load our event object
			$this->load->model('Event', 'event');

			// Create the event.
			$this->event->create(
				$this->input->post('event_name'),
				$this->input->post('event_time')
			);

			// Redirect to that event.
			redirect('/events/view/'.$this->event->id, 'refresh');

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


	// Why do custom form validation functions have to be in the controller?
	public function check_event_timestamp($input){

		// Get the timestamp from the user input.
		$timestamp = strtotime($input);

		// Check if we have a valid timestamp.
		$valid_timestamp = $timestamp !== FAlSE;

		// If we don't have a valid timestmap
		if(!$valid_timestamp){

			// Set an error.
			$this->form_validation->set_message(
				'check_event_timestamp', 'The %s field could not be read as a valid timestamp.'
			);
		}

		// If the stap
		return  $valid_timestamp;
	}


	// Ensure the password is correct
	public function check_password($input){

		$password_correct = $input == 'crouton';

		// If we don't have a valid timestmap
		if(!$password_correct){

			// Set an error.
			$this->form_validation->set_message(
				'check_password', 'The password you entered was incorrect.'
			);
		}

		// If the stap
		return  $password_correct;
	}

}