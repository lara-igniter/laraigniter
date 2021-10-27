<?php
/**
 * CodeIgniter Debug Bar
 *
 * @package     CodeIgniterDebugBar
 * @author      Anthony Tansens <a.tansens+github@gmail.com>
 * @license     http://opensource.org/licenses/MIT MIT
 * @since       Version 1.0
 * @filesource
 */
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Custom Profiler Sections
| -------------------------------------------------------------------------
| This file lets you determine whether or not various sections of Profiler
| data are displayed when the Profiler is enabled.
|
*/

$config['codeigniter_info']     = true;
$config['exceptions']           = true;
$config['messages']             = true;
$config['php_info']             = true;
$config['included_files']       = true;

/*
| -------------------------------------------------------------------------
| Profiler Sections
| -------------------------------------------------------------------------
| This file lets you determine whether or not various sections of Profiler
| data are displayed when the Profiler is enabled.
| Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/profiling.html
|
*/

$config['benchmarks']           = true;
$config['config']               = true;
$config['controller_info']      = true;
$config['get']                  = true;
$config['http_headers']         = true;
$config['memory_usage']         = true;
$config['post']                 = true;
$config['queries']              = true;
$config['uri_string']           = true;
$config['session_data']         = true;
$config['query_toggle_count']   = 25;

/*
| -------------------------------------------------------------------
| PHP Debug Bar Javascript Renderer Sections
| -------------------------------------------------------------------
| These are the config lines for PHP Debug Bar Javascript Renderer.
|
| Options available, make sure you know what you are doing :
|
|   base_path
|   base_url
|   include_vendors
|   javascript_class
|   variable_name
|   initialization
|   enable_jquery_noconflict
|   controls
|   disable_controls
|   ignore_collectors
|   ajax_handler_classname
|   ajax_handler_bind_to_jquery
|   open_handler_classname
|   open_handler_url
|
|   http://phpdebugbar.com/docs/rendering.html#rendering
|
*/

$config['base_url']                     = null;
$config['include_vendors']              = false;
$config['enable_jquery_noconflict']     = false;
$config['open_handler_url']             = route('phpdebugbar.open_handler'); // Example : get_instance()->config->site_url('phpdebugbar/open_handler');

/*
|--------------------------------------------------------------------------
| Cache Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| application/cache/debugbar/ directory. Use a full server path with trailing slash.
|
*/
$config['cache_path']                   = FCPATH.'storage/debugbar/';

/*
|--------------------------------------------------------------------------
| Display Options
|--------------------------------------------------------------------------
| This options can be usefull if you want to handle custom output with Debugbar.
|
|   display_assets: Whether display content's assets (default: TRUE)
|   display_javascript: Whether display inline script (default: TRUE)
|
| If you set display_assets to false you have to handle assets output manually,
| for this purpose you can use CI_Profiler::css_assets() and CI_Profiler::js_assets()
| they behave exactly like there aliases in JavascriptRenderer::dumpJsAssets()
| and JavascriptRenderer::dumpJsAssets() (see: http://phpdebugbar.com/docs/rendering.html).
|
| If you set display_javascript to false you have to handle inline script
| manually, for this purpose you can use CI_Profiler::inline_script()
| (IMPORTANT : It display inline script with <script> tags !!).
|
*/
$config['display_assets']               = true;
$config['display_javascript']           = true;
