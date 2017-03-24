<?php
    require_once __DIR__.'/../src/RepeatCounter.php';
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeat_1()
        {
            //Arrange
            $userInput = 'How many cats do you have?';
            $finder = 'I have 10 cats, they are great.';
            $test_RepeatCounter = new RepeatCounter($userInput, $finder);
            //Act
            $result = $test_RepeatCounter->countRepeats($userInput, $finder);
            //Assert
            $this->assertEquals(1, $result);
        }

    }
?>
