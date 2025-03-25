<?php

namespace Framework;
//this class checks the values of the fields e.g not empty or email is good etc
class Validation
{
    /***
     * validate a string
     * @param string $value
     * @param int $min
     * #param int $max
     * @return bool  
     *      
     */

    public static function string($value, $min = 1, $max = INF)
    {

        if (is_string($value)) {
            $value = trim($value);
            $length = strlen($value);
            return $length >= $min && $length <= $max;
        }
        return false;
    }

    /**
     * check for int in sysid
     * @param int $value
     * @return bool
     */

    public static function hasIisIntOnly($value)
    {
        if (ctype_digit($value) > 11111) {
            return ctype_digit($value);
        }
        return false;
    }

    /**
     * @param string $value
     * @return mixed
     */
    public static function email($value)
    {
        $value = trim($value);
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Match a value against another
     * @param string $value1 and $value2
     * @return bool
     */

    public static function match($value1, $value2)
    {
        $value1 = trim($value1);
        $value2 = trim($value2);

        return $value1 === $value2;
    }
}
