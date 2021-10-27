<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('lang')) {
    /**
	 * Lang
	 *
     * Fetches a language variable with extra variables
     *
     * @param	string	$line		The language line
     * @param  array  $replace      Any additional pass variables
     * @return string|array|null
     */
    function lang($line, $replace = array())
    {
        $line = get_instance()->lang->line($line);

        if (is_string($line)) {
            if (empty($replace)) {
                return $line;
            }

            foreach ($replace as $key => $value) {
                $line = str_replace(
                    [':'.$key, ':'.strtoupper($key), ':'.ucfirst($key)],
                    [$value, strtoupper($value), ucfirst($value)],
                    $line
                );
            }
    
            return $line;
        }
    }
}