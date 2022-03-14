<?php

namespace App\Services;

/*
	Business logic for each guess
*/
class Guess {

	/*
		new guess needs
		- guessed number
		- correct number
	*/
	function __construct($guessed_number, $correct_number) {

		// setting the variables for the class
		$this->guessed_number = $guessed_number;
		$this->correct_number = $correct_number;
	}

	/*
		method to set the right message
	*/
	function get_message() {

		if($this->is_number_correct()) return 'correct';

		return $this->is_number_higher() ? 'higher' : 'lower';

	}

	/*
		method to see if the number is correct
	*/
	function is_number_correct() {
		return $this->correct_number == $this->guessed_number;
	}

	/*
		method to see if the number is higher
	*/
	function is_number_higher() {
		return $this->correct_number > $this->guessed_number;
	}

}
