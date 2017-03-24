<?php
    require_once __DIR__.'/../src/RepeatCounter.php';
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeat_1()
        {
            //Arrange
            $userInput = 'cats';
            $finder = 'I have 10 dogs, they are great.';
            $test_RepeatCounter = new RepeatCounter;
            //Act
            $result = $test_RepeatCounter->countRepeats($userInput, $finder);
            //Assert
            $this->assertEquals(0, $result);
        }
        function test_countRepeat_2()
        {
          //Arrange
          $userInput = 'cat';
          $finder = 'cat';
          $test_RepeatCounter = new RepeatCounter;
          //Act
          $result = $test_RepeatCounter->countRepeats($userInput, $finder);
          //Assert
          $this->assertEquals(1, $result);
        }
        function test_countRepeat_3()
        {
          //Arrange
          $userInput = 'This is one crazy cat, huh Watson is there another cat over there, too';
          $finder = 'cat';
          $test_RepeatCounter = new RepeatCounter;
          //Act
          $result = $test_RepeatCounter->countRepeats($userInput, $finder);
          //Assert
          $this->assertEquals(1, $result);
        }

    }
?>
