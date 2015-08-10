<?php

    class TitleCaseGenerator
    {
      function makeTitleCase($input_title)
      {
        $ignore_designated_words = array("a", "an", "the", "from", "to", "or", "my");

        $input_array_of_words = explode(" ", $input_title);

        $output_titlecased = array();
        foreach ($input_array_of_words as $word) {

            if(in_array($word, $ignore_designated_words)) {

            array_push($output_titlecased, $word);

            } else {

                array_push($output_titlecased, ucfirst($word));
            }

          }
        return implode(" ", $output_titlecased);

        }
    }
 ?>
