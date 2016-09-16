<?php
class RepeatCounter
{
    function countRepeats($word_input, $sentence_input)
    {
        $count = 0;
        $sentenceArray = explode(" ", $sentence_input);
        foreach ($sentenceArray as $word) {
          if ($word_input == $word) {
            $count++;
          }
        }
        return $count;

    }
}
?>
