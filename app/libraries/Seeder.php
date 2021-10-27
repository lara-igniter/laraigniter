<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * CodeIgniter 3.0
 *
 * @author     George Tsachrelias <https://github.com/giorgosstab>
 * @license    MIT
 * @copyright  2020 George Tsachrelias
 * @link       https://github.com/giorgosstab/b2b-philosophy
 */

class Seeder
{
    private $CI;
    protected $db;
    protected $dbforge;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->database();
        $this->CI->load->dbforge();
        $this->db = $this->CI->db;
        $this->dbforge = $this->CI->dbforge;
    }

    /**
     * Run another seeder
     *
     * @param string $seeder Seeder classname
     */
    public function call($seeder)
    {
        $file = FCPATH . 'database/seeds/' . $seeder . '.php';
        
        if(file_exists($file)) {
            require_once $file;
            $obj = new $seeder;
            $obj->run();
            echo $seeder . " seeding successfully! \n";
        } else {
            echo "Seeding file does not exist! \n";
        }
        
    }
    
    public function __get($property)
    {
        return $this->CI->$property;
    }
}
