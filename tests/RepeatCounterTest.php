<?php
    require_once "src/RepeatCounter.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_countRepeatWords()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_input = "clown";
            $sentence_input = "Only one clown emerged from the clown car";

            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $sentence_input);

            //Assert
            $this->assertEquals("2", $result);
        }
        function test_countRepeatWordsIncludeCaps()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word_input = "brown";
            $sentence_input = "Dr. Brown owns a brown satchel and lives in Brownsville, MD.";

            //Act
            $result = $test_RepeatCounter->countRepeats($word_input, $sentence_input);

            //Assert
            $this->assertEquals("2", $result);
        }

    }?>
