<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
//require'C:\xampp\htdocs\codeigniter-3.2.1-with-admin-LTE-Template-Intigration\vendor\autoload.php';


class Rfid extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {

        parent::__construct();
        $this->load->model('student_model');





    }

    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
     $rfid = $this->get('id');
     log_message('error',json_encode($rfid));
    }


}

?>