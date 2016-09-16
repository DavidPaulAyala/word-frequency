<?php
class RepeatCounter
{
    function countRepeats($word_input, $sentence_input)
    {
        $count = 0;
        $sentenceArray = explode(" ", $sentence_input);
        foreach ($sentenceArray as $word) {
            if (strtolower($word_input) == strtolower($word)) {
              $count++;
            }
        }
        return $count;
    }
}
?>
