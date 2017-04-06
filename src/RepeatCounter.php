<?php
    class RepeatCounter {
        function countRepeats($searchInput, $findInput)
        {
          $wordCount = 0;
            $search_string = explode(" ", $searchInput);
            $findInput= strtolower($findInput);
            foreach ($search_string as $word){
              $whatToRemove = array("?","!",",",";");
              $word = str_replace($whatToRemove, "", $word);
              $word = strtolower($word);
              if ($findInput == $word){
                $wordCount++;
              }
            }
            return $wordCount;
        }




  }





?>
