<?php


class Events extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	
	public function view($event_id){

		// Load our event model.
		$this->load->model('Event', 'event');
		
		print $event_id;

		// Load our current events ID.
		$this->event->load($event_id);

		print_r($this->event);


	}

}