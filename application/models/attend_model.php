<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class attend_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    
    

    function setAttend($data) {
        $this->db->insert('tbl_attend', $data);

        if ($this->db->affected_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    function Ckattend($id,$date) {
        $this->db->select('*');
        $this->db->where('student_id',$id);
        $this->db->where('date',$date);
        $query = $this->db->get('tbl_attend');
        return $query->row();
    }
 function getAttend() {
        $this->db->select('*');
        $this->db->order_by('date');
        $this->db->join('tbl_student','tbl_student.id =tbl_attend.student_id');
        $query = $this->db->get('tbl_attend');
        return $query->result_array();
    }
    function getMyAttend($sid) {
        $this->db->select('*');
        $this->db->where('tbl_attend.student_id',$sid);
        $this->db->order_by('date');
        $this->db->join('tbl_student','tbl_student.id =tbl_attend.student_id');
        $query = $this->db->get('tbl_attend');
        return $query->result_array();
    }

    function getFilterAttends($faculty,$batch,$date) {
        $this->db->select('*');
//        $this->db->where('active', 1);
        $this->db->order_by('date');
        $this->db->join('tbl_student','tbl_student.id =tbl_attend.student_id');

        if ($faculty!='') {
            $this->db->where('tbl_student.faculty', $faculty);
        }
        if ($batch!='') {
            $this->db->where('tbl_student.batch', $batch);
        }if ($date!='') {
            $this->db->where('date', $date);
        }
        $query = $this->db->get('tbl_attend');
        return $query->result_array();
    }

    function getTotAttends($date){
        $this->db->select('count(*) as totAttend');
        $this->db->order_by('date');
        $this->db->where('date',$date);
        $query = $this->db->get('tbl_attend');
        return $query->row();
    }

}

  