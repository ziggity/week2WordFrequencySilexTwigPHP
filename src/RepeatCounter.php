<?php
    class RepeatCounter {
        function countRepeats($userInput, $finder)
        {
            $wordCount = 0;
            $string = explode(" ", $userInput);
            $finder = strtolower($finder);

            foreach ($string as $index => $word){
              $word = strtolower($word);
              if ($word == $finder){
                $wordCount++;
              }
            }
            return $wordCount;
        }




  }





?>
