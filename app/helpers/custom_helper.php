<?php

use App\libraries\Redirect;

if (! defined('BASEPATH')) exit('No direct script access allowed');

if (! function_exists('asset')) {
    /**
     * Generate an asset path for the application.
     *
     * @param string $path
     * @return string
     */
    function asset(string $path): string
    {
        return base_url() . $path;
    }
}

if (! function_exists('old')) {
    /**
     * Retrieve an old input item.
     *
     * @param string $field
     * @return mixed
     */
    function old(string $field, $data_value = null)
    {
        if(is_null($data_value)) {
            return set_value($field);
        } else {
            return set_value($field, $data_value);
        }
    }
}

if (! function_exists('str_slug')) {
    /**
     * Generate a URL friendly "slug" from a given string.
     *
     * @param string $title
     * @param string $separator
     * @return mixed
     */
    function str_slug(string $title, string $separator)
    {
        return str_replace("_", $separator, $title);
    }
}

if (! function_exists('csrf_token')) {
    /**
     * Get the CSRF token value.
     *
     * @return string
     */
    function csrf_token(): string
    {
        return app()->security->get_csrf_hash();
    }
}

if (! function_exists('csrf_name')) {
    /**
     * Get the CSRF token name.
     *
     * @return string
     */
    function csrf_name() : string
    {
        return app()->security->get_csrf_token_name();
    }
}

if (! function_exists('csrf_field')) {
    /**
     * Generate a CSRF token form field.
     *
     */
    function csrf_field()
    {
        return '<input type="hidden" name="'.csrf_name().'" value="'.csrf_token().'">';
    }
}

if (!function_exists('value')) {
    /**
     * Return the default value of the given value.
     *
     * @param mixed $value
     *
     * @return mixed
     */
    function value($value)
    {
        return $value instanceof Closure ? $value() : $value;
    }
}

if (!function_exists('parse_url')) {
    function parse_url($url)
    {
        $disallowed = array('http://', 'https://');
        foreach ($disallowed as $d) {
            if (strpos($url, $d) === 0) {
                return str_replace($d, '', $url);
            }
        }
        return $url;
    }
}

if (! function_exists('copyrights')) {
    function copyrights($year = 'auto')
    {
        $created_by = ' created by <a target="_blank" href="https://silktech.gr">SilkTech</a>';

        $company = '&copy; ' . env('APP_NAME') . ' ';

        if (intval($year) == 'auto') {
            return $company . date('Y') . $created_by;
        }
        if (intval($year) == date('Y')) {
            return $company . intval($year) . $created_by;
        }
        if (intval($year) < date('Y')) {
            return $company . intval($year) . ' - ' . date('Y') . $created_by;
        }
        if (intval($year) > date('Y')) {
            return $company . date('Y') . $created_by;
        }
    }
}

/**
 * query_string function.
 *
 * Returns query string with added or removed key/value pairs.
 *
 * @param mixed $add (default: '') can be string or array
 * @param mixed $remove (default: '') can be string or array
 * @param bool $include_current (default: TRUE)
 * @return string
 */
if (! function_exists('query_string')) {
    function query_string($add = '', $remove = '', $include_current = true)
    {
        // set initial query string
        $query_string = array();
        if ($include_current && app()->input->get() !== false) {
            $query_string = app()->input->get();
        }

        // add to query string
        if ($add != '') {
            // convert to array
            if (is_string($add)) {
                $add = array($add);
            }

            $query_string = array_merge($query_string, $add);
        }

        // remove from query string
        if ($remove != '') {
            // convert to array
            if (is_string($remove)) {
                $remove = array($remove);
            }

            // remove from query_string
            foreach ($remove as $rm) {
                $key = array_search($rm, array_keys($query_string));
                if ($key !== false) {
                    unset($query_string[$rm]);
                }
            }
        }

        // return result
        $return = '';
        if (count($query_string) > 0) {
            $return = '?' . http_build_query($query_string);
        }

        return $return;
    }
}

if (! function_exists('prev_url')) {
    function prev_url()
    {
        return substr(app()->session->userdata('prev_url'), 1);
    }
}

if (! function_exists('redirect_url')) {
    function redirect_url()
    {
        $url = parse_url(current_url());

        app()->session->set_userdata('redirect_url', $url['path']);
    }
}

if ( ! function_exists('price_format'))
{
    function price_format($value, $decimal_place, $currency = TRUE)
    {
        echo $currency ? number_format($value, (int)$decimal_place, ',', '.'). '&nbsp;&euro;' : number_format($value, (int)$decimal_place, ',', '.');
    }
}

if ( ! function_exists('decimal_format'))
{
    function decimal_format($value, $decimal_place, $symbol = '')
    {
        echo !empty($symbol) ? number_format($value, (int)$decimal_place, ',', '.'). '&nbsp;' . $symbol : number_format($value, (int)$decimal_place, ',', '.');
    }
}

if (! function_exists('format_date')) {
	function format_date($date, $format = NULL) {
		if($format) {
			return date($format, strtotime($date));
		} else {
			return $date;
		}
	}
}

if (! function_exists('set_select2')) {
    function set_select2($field_name, $data_value, $data_get) {
        return set_select($field_name, $data_value, ( !empty($data_get) && $data_get == $data_value ? TRUE : FALSE ));
    }
}

if (! function_exists('auth')) {
    function auth() {
        return app()->session->userdata('logged_user');
    }
}

if (! function_exists('loggedUser')) {
    function loggedUser() {
        return ucfirst(app()->session->userdata('logged_user')->first_name) . ' ' . ucfirst(app()->session->userdata('logged_user')->last_name);
    }
}
if (! function_exists('title')) {
    /**
     * Convert the given string to title case.
     *
     * @param string $value
     * @return string
     */
    function title(string $value)
    {
        return mb_convert_case($value, MB_CASE_TITLE, 'UTF-8');
    }
}
