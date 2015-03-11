<?php

    class FindReplace
    {
        function makeFindReplace($user_string, $find, $replace)
        {
            $exploded_string = explode(" ", $user_string);

            if (in_array($find, $exploded_string)) {
                $output = str_replace($find, $replace, $user_string);
                return $output;
            } else {
                return $user_string;
            }
        }
    }
?>
