<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Attendencereport extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('student_model','student');
        $this->load->model('attend_model','attend');
        $this->load->model('report_model','cusreport');



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

        $this->generatePdf();
    }


    function generatePdf()
    {
        $fac = $this->input->get('fac');
        $batch = $this->input->get('batch');
        $start = $this->input->get('start');
        $end = $this->input->get('end');


        $items = $this->cusreport->getattendancehistory($fac,$batch,$start,$end);

        date_default_timezone_set("Asia/Colombo");
        $this->load->library("Pdf");

        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// add a page
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->setPrintHeader(false);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        // Add a page
        $pdf->AddPage();
        $pdf->SetFont('timesB', '', 16, '', true);
        $pdf->Image( docLogo, 10, 10, 25, 25);
        $pdf->setTextColor(0, 0, 255);
        $pdf->SetXY(45, 11);
        $pdf->Cell(0, 0, strtoupper(companyName), 0, 1, '', 0, '', 0);
        $pdf->setTextColor(0, 0, 0);
        $pdf->SetXY(0, 40);
        $pdf->Cell(0, 0, 'Attendance History ', 0, 1, 'C', 0, '', 0);
        $pdf->SetFont('times', '', 11, '', true);
        $pdf->SetXY(45, 20);
        $pdf->Cell(0, 0, address, 0, 1, '', 0, '', 0);
        $pdf->SetXY(45, 25);
        $pdf->Cell(0, 0, 'Tel: ' . telephone . ' Fax: ' . fax, 0, 1, '', 0, '', 0);
        $pdf->SetXY(45, 30);
        $pdf->Cell(0, 0, 'Email: ' . email . ' Web: ' . web, 0, 1, '', 0, '', 0);

        $pdf->SetXY(145, 50);
        $pdf->Cell(30, 0, 'Print Date', 0, 1, '', 0, '', 0);
        $pdf->SetXY(175, 50);
        $pdf->Cell(20, 0, ': ' . date('Y-m-d'), 0, 1, '', 0, '', 0);
        $pdf->SetXY(145, 55);
        $pdf->Cell(30, 0, 'Print Time', 0, 1, '', 0, '', 0);
        $pdf->SetXY(175, 55);
        $pdf->Cell(20, 0, ': ' . date('h:i A'), 0, 1, '', 0, '', 0);
        $pdf->SetXY(145, 60);



        $pdf->SetXY(10, 50);
        $pdf->Cell(20, 0, '', 0, 1, '', 0, '', 0);
        $pdf->SetXY(30, 50);
        $pdf->Cell(30, 0, '' , 0, 1, '', 0, '', 0);


//        $pdf->SetXY(10, 60);
//        $pdf->Cell(50, 0, 'Brand Code', 0, 1, '', 0, '', 0);
//        $pdf->SetXY(30, 60);
//        $pdf->Cell(30, 0, ': ' . $brand, 0, 1, '', 0, '', 0);
//        $pdf->Ln();
//        $pdf->Ln();
        $pdf->SetXY(10, 70);
        $pdf->SetFont('times', '', 10, '', true);
        $Header = array('Student ID', 'Faculty', 'Batch', 'Date', 'Time');
        $pdf->SetFillColor(255, 255, 255);
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(0);
        $pdf->SetLineWidth(0.3);
//        $pdf->SetFont('', 'B');
//        $pdf->SetFont('times', '', 10, '', true);
        // Header
        $w = array(70, 30, 30, 30, 30);
        $num_headers = count($Header);
        for ($i = 0; $i < $num_headers; ++$i) {
            $pdf->Cell($w[$i], 7, $Header[$i], 1, 0, 'C', 1);
        }
        $pdf->Ln();
        for ($i = 0; $i < sizeof($items); $i++) {

            $pdf->SetFont('times');
            $pdf->Cell($w[0], 5, $items[$i]['student_id'], 'LR', 0, 'C');
            $pdf->Cell($w[1], 5, $items[$i]['faculty'], 'LR', 0, 'L');
            $pdf->Cell($w[2], 5, $items[$i]['batch'] , 'LR', 0, 'L');
            $pdf->Cell($w[3], 5, $items[$i]['date'] , 'LR', 0, 'C');
            $pdf->Cell($w[4], 5, $items[$i]['Time'] , 'LR', 0, 'R');
            $pdf->Ln();
        }
        $pdf->AddPage('P', 'A4');
            $html = "<h1>Test Page</h1>";
            $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->SetXY(20, 10);
        $pdf->Cell(100, 0,'' , 0, 1, '', 0, '', 0);
        $pdf->MultiCell(170, 5, '', 0, 'L', 0, 0, '', '', true);
        $pdf->SetXY(20, 50);
        $pdf->MultiCell(170, 5, '', 0, 'L', 0, 0, '', '', true);
        $pdf->AddPage('P', 'A4');
        $pdf->SetXY(20, 10);
        $pdf->MultiCell(170, 5, '', 0, 'L', 0, 0, '', '', true);
        $pdf->IncludeJS("print();");
        $pdf->Output();
    }
}
?>