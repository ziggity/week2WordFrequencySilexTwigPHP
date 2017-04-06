<?php
    require_once __DIR__.'/../src/RepeatCounter.php';
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
      function test_countRepeats_noMatch()
    {
        //Arrange
        $newRepeatCounter = new RepeatCounter;
        $userInput = "hello";
        $finder = "hi";
        //Act
        $result = $newRepeatCounter->countRepeats($userInput, $finder);
        //Assert
        $this->assertEquals(0, $result);
    }
      function test_countRepeat_1()
    {
        //Arrange
        $userInput = 'cats';
        $finder = 'cats';
        $test_RepeatCounter = new RepeatCounter;
        //Act
        $result = $test_RepeatCounter->countRepeats($userInput, $finder);
        //Assert
        $this->assertEquals(1, $result);
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
          $userInput = 'This is one crazy cat, huh Watson is there another cat over there, too, oh another cat is here, too!';
          $finder = 'cat';
          $test_RepeatCounter = new RepeatCounter;
          //Act
          $result = $test_RepeatCounter->countRepeats($userInput, $finder);
          //Assert
          $this->assertEquals(3, $result);
        }
        function test_countRepeat_4()
        {
          //Arrange
          $userInput = 'This is a nice cat, I love cats so much';
          $finder = 'cat';
          $test_RepeatCounter = new RepeatCounter;
          //Act
          $result = $test_RepeatCounter->countRepeats($userInput, $finder);
          //Assert
          $this->assertEquals(1, $result);
        }

    }
?>
