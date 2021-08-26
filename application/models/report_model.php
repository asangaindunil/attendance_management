<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class report_model extends CI_Model
{
//
//    function getattendancehistory($fac,$batch,$start,$end){
//        $query = $this->db->query("select t.*, s.*"
//            . "from tbl_attend t "
//            . "LEFT JOIN tbl_student s ON s.id= t.student_id "
//            . "where (t.date BETWEEN '" . $start . "' AND '" . $end . "') "
//            . "order by t.date desc"
//        );
//        return $query->result_array();
//
//    }
    function getattendancehistory($fac,$batch,$start,$end)
    {
        $this->db->select('*');
        if($fac!=null)
            $this->db->where('faculty',$fac);
        if($batch!=null)
            $this->db->where('batch',$batch);
        if($start!=null&&$end!=null)
            $this->db->where("(tbl_attend.date BETWEEN '" . $start . "' AND '" . $end . "')");
        $this->db->join('tbl_student', 'tbl_student.id = tbl_attend.student_id', 'left');
        $query = $this->db->get('tbl_attend');
        return $query->result_array();
    }
    function getstudentlist($fac,$batch)
    {
        $this->db->select('*');
        if($fac!=null)
            $this->db->where('faculty',$fac);
        if($batch!=null)
            $this->db->where('batch',$batch);
        $query = $this->db->get('tbl_student');
        return $query->result_array();
    }
}

  