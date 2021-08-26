<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Dashboard extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('student_model','student');
        $this->load->model('attend_model','attend');
        $this->load->model('user_model','user');



    }


    function get_details(){
        header('Content-Type: application/x-json; charset=utf-8');
        $now = new DateTime();
        $now->setTimezone(new DateTimezone('Asia/Colombo'));
        $today =$now->  format("Y/m/d");
        $result['totstudents']=$this->student->getTotStudents();
        $result['totusers']=$this->user->getTotUsers();
        $result['totattends']=$this->attend->getTotAttends($today);


        echo(json_encode($result));
    }
}
?>