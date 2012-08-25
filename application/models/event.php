<?php

/**
 * This event object manages the events that are created within the site.
 * 
 * @extends CI_Model
 */
class Event extends CI_Model{

	public $id, $name, $timestamp;


	// When our object is constructed.
	function __construct(){

		// Ensure the database is loaded and ready to go.
		$this->load->database();
		$this->load->helper('url');
	}


	// Load an even from the database.
	public function load($event_id){
		
		// Get the data from the database.
		$results = $this->db->get_where(
			'events',
			array(
				'id' => $event_id
			)
		)->result();


		// Populate this events object with the correct variables.
		$this->id = $event_id;
		$this->name = $results[0]->name;
		$this->timestamp = $results[0]->timestamp;
	
	}


	// Create an event to be inserted into the database.
	public function create($event_name, $event_time){

		// Get the timestamp from a string.
		$time = strtotime($event_time);

		// Prepare the values we are going to insert into the database.
		$data = array(
			'ip' => $_SERVER['REMOTE_ADDR'],
			'name' => $event_name,
			'timestamp' => $time
		);

		// Insert them into our events table.
		$this->db->insert('events', $data);

		// Get the event ID that was just inserted.
		$event_id = $this->db->insert_id();

		// Load the event from the database.
		$this->load($event_id);
	}

}