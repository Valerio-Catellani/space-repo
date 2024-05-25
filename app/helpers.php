<?php

if (!function_exists('formatAttributeName')) {
    function formatAttributeName($name)
    {
        return ucwords(str_replace('_', ' ', $name));
    }
}
