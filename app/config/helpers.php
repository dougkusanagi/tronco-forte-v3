<?php

if (!function_exists('d')) {
    /**
     * Dump one or more variables.
     * 
     * @param mixed ...$var
     */
    function d(...$var) {
        echo '<pre>';
        foreach ($var as $v) {
            var_dump($v);
        }
        echo '</pre>';
    }
}

if (!function_exists('dd')) {
    /**
     * Dump one or more variables and die.
     * 
     * @param mixed ...$var
     */
    function dd(...$var) {
        d($var);
        exit;
    }
}