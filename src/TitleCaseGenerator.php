<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_title = strtolower($input_title);
            $input_array_of_words = explode(" ", $input_title);
            $output_titlecased = array();
            $designated_words = array("from", "the", "to", "a", "and", "on");
            foreach ($input_array_of_words as $word) {
                $isDesignatedWord = false;
                foreach ($designated_words as $designated_word) {
                    if ($word == $designated_word) {
                        $isDesignatedWord = true;
                    }
                }
                if ($isDesignatedWord) {
                    array_push($output_titlecased, $word);
                } else {
                    array_push($output_titlecased, ucfirst($word));
                }
            }
            $output_titlecased[0] = ucfirst($output_titlecased[0]);
            return implode(" ", $output_titlecased);
        }
    }

?>
