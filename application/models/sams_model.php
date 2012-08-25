<?php

/**
 * This event object manages the events that are created within the site.
 * 
 * @extends CI_Model
 */
class Event extends CI_Model{

	// When our object is constructed.
	function __construct(){

		// Ensure the database is loaded and ready to go.
		$this->load->database();

	}

	// Load an even from the database.
	public function load($event_id){

	}

	// Create an event to be inserted into the database.
	public function create(){

	}

}	