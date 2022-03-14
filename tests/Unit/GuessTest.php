<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\Guess;

class GuessTest extends TestCase
{

    /**
     * Guessing correct
     */
    public function test_guess_correct()
    {

        $guess = new Guess(1, 1);

        $this->assertTrue($guess->get_message() == 'correct');

    }

    /**
     * Guessing lower
     */
    public function test_guess_lower()
    {

        $guess = new Guess(2, 1);

        $this->assertTrue($guess->get_message() == 'lower');

    }

    /**
     * Guessing higher
     */
    public function test_guess_higher()
    {

        $guess = new Guess(1, 2);

        $this->assertTrue($guess->get_message() == 'higher');

    }


}
