<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
//require'C:\xampp\htdocs\codeigniter-3.2.1-with-admin-LTE-Template-Intigration\vendor\autoload.php';


class Newstudent extends BaseController
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
        $this->global['pageTitle'] = 'AMS: Dashboard';
        $this->load->model('user_model');
        $this->isLoggedIn();
        $data['id'] = $this->uri->segment(3);


        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );

        $this->loadViews("addStudent", $this->global,null, NULL);
    }

    /**
     * This function is used to load the user list
     */

    function set_student()
    {
        header('Content-Type: application/x-json; charset=utf-8');

        $dataJson = $this->input->post('data');
        $data = json_decode($dataJson);
        log_message('error', 'check--1111....'.json_encode($data));

        $student = $data->student;
        $result['action'] = $data->action;
        $result['id'] = $data->id;

        if ($result['action'] == 'insert') {
        $result['student'] = $this->student_model->setStudent($student);
        $result['data'] = $student;
        $userInfo = array('email'=>$student->email, 'password'=>getHashedPassword($student->nic), 'roleId'=>4, 'name'=> $student->name,
            'mobile'=>$student->tel, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'),'sid'=> $result['id'], );

        $this->load->model('user_model');
        $result['login'] = $this->user_model->addNewUser($userInfo);
        } else if ($result['action'] == 'update') {
            $sid =$data->id;
            $result['student'] = $this->student_model->updateStudent($sid,$student);

        }
        echo json_encode($result);
    }
    function get_student() {
        header('Content-Type: application/x-json; charset=utf-8');
        $data['id'] =$this->input->post('id');


        log_message('error',json_encode($data['id']));

        if($data['id']!=null) {
            $result = $this->student_model->CkStudent($data['id']);
            log_message('error',json_encode($result));
        }else{
            $result=null;
        }

        echo json_encode($result);

    }
}

?>