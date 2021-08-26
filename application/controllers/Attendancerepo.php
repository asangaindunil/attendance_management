<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
//require'C:\xampp\htdocs\codeigniter-3.2.1-with-admin-LTE-Template-Intigration\vendor\autoload.php';


class Attendancerepo extends BaseController
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

        $this->loadViews("attendanceReport", $this->global,null, NULL);
    }


}

?>