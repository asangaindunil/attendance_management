<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class details_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */


    function CountStudents()
    {
//        $this->db->cache_on();
        $this->db->select('count(student_id) as tot');
        $this->db->where('status', 1);
        $query = $this->db->get('tbl_student');
        return $query->row();
    }
}

  