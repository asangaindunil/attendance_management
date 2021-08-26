<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Viewprofile extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('attend_model','attend');
        $this->load->model('student_model','student');



    }

    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'AMS : View Profile';
        $this->load->model('user_model');
        $this->isLoggedIn();


        $this->loadViews("viewProfile", $this->global, NULL, NULL);
    }


    function get_attend($sid){

        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->attend->getMyAttend($sid)));

    }
    function get_profile(){
        $sid = $this->input->post('data');

        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->student->getMyProfile($sid)));

    }
}
?>