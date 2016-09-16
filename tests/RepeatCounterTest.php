<?php
    require_once "src/RepeatCounter.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_verifyString()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $first_input = "clown";

            //Act
            $result = $test_RepeatCounter->countRepeats($first_input);

            //Assert
            $this->assertEquals(true, $result);
        }


    }?>
