<?php


class Events extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	
	public function view($event_id){

		// Load our event model.
		$this->load->model('Event', 'event');
		
		// Load our current events ID.
		$this->event->load($event_id);

		// Load the event viewing object.
		$event_view = $this->load->view(
			'event',
			array(
				'event' => $this->event
			),
			true
		);

		// Load the form in our standard template.
		$this->load->view(
			'layout',
			array(
				'title' => 'View Event',
				'content' => $event_view,
			)
		);

	}

}