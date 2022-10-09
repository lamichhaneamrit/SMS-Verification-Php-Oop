<?php

class Validate
{
    //escaping the capital and small letters
    public static function escape($input)
    {
        $input = trim(strip_tags($input));
        $input = stripslashes($input);
        $input = htmlentities($input, ENT_QUOTES);
        return $input;
    }
    //email filter
    public static function filterEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    // length of inputs parameters
    public static function length($input, $min, $max)
    {
        if (strlen($input) > $max) {
            return true;
        } else if (strlen($input) < $min) {
            return true;
        }
    }
}