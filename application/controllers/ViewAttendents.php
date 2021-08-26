<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class ViewAttendents extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('attend_model','attend');



    }

    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'AMS : View Attendance';
        $this->load->model('user_model');
        $this->isLoggedIn();
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );

        $this->loadViews("ViewAttendents", $this->global, NULL, NULL);
    }


    function get_attend(){

        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->attend->getAttend()));

    }


}
?>