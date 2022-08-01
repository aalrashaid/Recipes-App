<?php

use Illuminate\Support\Str;

if (!function_exists('limited_text')) {
    function limited_text($text, $length): string
    {
        return Str::limit($text, $length, '...');
    }
}
