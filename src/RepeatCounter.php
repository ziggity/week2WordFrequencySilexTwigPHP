<?php
    class RepeatCounter {
        function countRepeats($searchInput, $findInput)
        {
          $wordCount = 0;
            $search_string = explode(" ", $searchInput);
            $findInput= strtolower($findInput);
            foreach ($search_string as $word){
              if ($findInput == $word){
                $wordCount++;
              }
            }
            return $wordCount;
        }




  }





?>
