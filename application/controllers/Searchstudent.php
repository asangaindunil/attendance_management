<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Searchstudent extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('student_model','student');



    }

    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'AMS : Search Students';
        $this->load->model('user_model');
        $this->isLoggedIn();
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );

        $this->loadViews("searchstudent", $this->global, NULL, NULL);
    }


    function get_students(){

        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->student->getAllStudents()));

    }
    function ad_get_students(){
        header('Content-Type: application/x-json; charset=utf-8');
        $faculty= $this->input->post('data');
        $batch= $this->input->post('batch');
        echo(json_encode($this->student->getFilterStudents($faculty,$batch)));
    }
}
?>