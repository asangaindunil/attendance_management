<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Attendents extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('student_model','student');
        $this->load->model('attend_model','attend');



    }

    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'AttendanceMS : Attendance';
        $this->load->model('user_model');
        $this->isLoggedIn();
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );

        $this->loadViews("attendents", $this->global, NULL, NULL);
    }


    function submit_attend(){

        $data1 = $this->input->post('data');
        $data['checkid'] = $this->student->CkStudent($data1['student_id']);
        if($data['checkid']==null){
            log_message('error','hiii');
            $result['id'] ='not';
        }else{
            $result['name']=$data['checkid']->name;

            $data['checkattend'] = $this->attend->Ckattend($data1['student_id'],$data1['date']);
            log_message('error',json_encode($data['checkattend']));
            if($data['checkattend'] ==null){
                $result['attend']  = $this->attend->setAttend($data1);
                log_message('error',json_encode( $result['attend'] ));
            }else{
                $result['attend'] = 'already';
            }

        }

        echo json_encode($result);

    }
    function ad_get_attends(){
        header('Content-Type: application/x-json; charset=utf-8');
        $faculty= $this->input->post('data');
        $batch= $this->input->post('batch');
        $date= $this->input->post('date');
        echo(json_encode($this->attend->getFilterAttends($faculty,$batch,$date)));
    }
}
?>