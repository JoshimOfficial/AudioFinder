<?php
if (!function_exists('map')) {
    function map($inputs): string
    {
        if (!\Illuminate\Support\Facades\App::environment('production')) {
            return $inputs; // don't process if we're not in production
        }
        $classes = explode(' ', $inputs);
        $output = '';
        foreach ($classes as $class) {
            $class = trim($class);
            if ($class == '') {
                continue;
            }
            $output .= config('map.' . $class, $class) . ' ';
        }
        return trim($output);
    }
}