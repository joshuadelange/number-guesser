<?php

namespace App\Services;

/*
	Business logic for each guess
*/
class Guess {

	/**
	 *	A guess needs:
	 *	@param integer $guessed_number
	 *	@param integer $correct_number
	 *
	 *	@return void
	*/
	function __construct($guessed_number, $correct_number) {
		$this->guessed_number = $guessed_number;
		$this->correct_number = $correct_number;
	}

	/**
	 *	method to set the right message
	 *	@return string
	 *
	*/
	function get_message() {

		if($this->is_number_correct()) return 'correct';

		return $this->is_number_higher() ? 'higher' : 'lower';

	}

	/**
	*	method to see if the number is correct
	* 	@return boolean
	*/
	function is_number_correct() {
		return $this->correct_number == $this->guessed_number;
	}

	/**
	*	method to see if the number is higher
	* 	@return boolean
	*/
	function is_number_higher() {
		return $this->correct_number > $this->guessed_number;
	}

}
