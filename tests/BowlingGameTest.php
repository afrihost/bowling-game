<?php

use BowlingGame\BowlingGame;

class BowlingGameTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var BowlingGame
     */
    private $bowlingGame;

    public function setUp()
    {
        $this->bowlingGame = new BowlingGame();
    }

    public function testScoreWithGutterGame()
    {
        $this->rollMany(20, 0);

        $this->assertEquals(0, $this->bowlingGame->score());
    }

    public function testScoreWithAllOnesGame()
    {
        $this->rollMany(20, 1);

        $this->assertEquals(20, $this->bowlingGame->score());
    }

    public function testScoreWithOneSpare()
    {
        $this->bowlingGame->roll(5);
        $this->bowlingGame->roll(5);
        $this->bowlingGame->roll(3);
        $this->rollMany(17, 0);

        $this->assertEquals(16, $this->bowlingGame->score());
    }

    public function testScoreWithOneStrike()
    {
        $this->bowlingGame->roll(10);
        $this->bowlingGame->roll(3);
        $this->bowlingGame->roll(4);
        $this->rollMany(16, 0);

        $this->assertEquals(24, $this->bowlingGame->score());
    }

    public function testScoreWithPerfectGame()
    {
        $this->rollMany(20, 10);

        $this->assertEquals(300, $this->bowlingGame->score());
    }

    private function rollMany($count, $pins)
    {
        for ($i = 0; $i < $count; $i++)
        {
            $this->bowlingGame->roll($pins);
        }
    }
}