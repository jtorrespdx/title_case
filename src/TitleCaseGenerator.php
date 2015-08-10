<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
                $ignore_designated_words = array("about", "above", "across", "after", "against", "along", "among", "around", "as", "at", "before", "behind", "below", "beneath", "beside", "between", "beyond", "but", "by", "down", "during", "for", "from", "inside", "into", "near", "of", "off", "on", "onto", "outside", "over", "past", "since", "than", "through", "to", "toward", "under", "until", "up", "upon", "with", "within", "without");
            $input_array_of_words = explode(" ", $input_title);
            $output_titlecased = array();


            foreach ($input_array_of_words as $current_word) {

                $lower_cased_word = strtolower($current_word);

                if($lower_cased_word == $input_array_of_words[0]) {

                    array_push($output_titlecased, ucfirst($lower_cased_word));

                } else{

                    if(in_array($lower_cased_word, $ignore_designated_words)) {

                        array_push($output_titlecased, $lower_cased_word);

                    } else {

                        array_push($output_titlecased, ucfirst($lower_cased_word));
                    }
                }
            }
        // $output_titlecased = strtoupper($output_titlecased);
        return implode(" ", $output_titlecased);

        }
    }
 ?>
