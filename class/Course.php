<?php 
require_once ("class/DBController.php");
class Course
{
    private $db_handle;
    
    function __construct() {
        $this->db_handle = new DBController();
    }
    
    function addCourse($course_name, $course_detail) {
        //die('tt');
        $query = "INSERT INTO tbl_course (course_name,course_detail) VALUES (?, ?)";
        $paramType = "ss";
        $paramValue = array(
            $course_name,
            $course_detail
        );
        
        $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
        return $insertId;
    }
    
    function editCourse($course_name, $course_detail, $course_id) {
        $query = "UPDATE tbl_course SET course_name = ?,course_detail = ? WHERE id = ?";
        $paramType = "ssi";
        $paramValue = array(
            $course_name,
            $course_detail,
            $course_id
        );
        
        $this->db_handle->update($query, $paramType, $paramValue);
    }
    
    function deleteCourse($course_id) {
        $query = "DELETE FROM tbl_course WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $course_id
        );
        $this->db_handle->update($query, $paramType, $paramValue);
    }
    
    function getCourseById($course_id) {
        $query = "SELECT * FROM tbl_course WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $course_id
        );
        
        $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
        return $result;
    }

    function countCourse() {
        $result = $this->db_handle->count_row('tbl_course');
        return $result;
    }
    
    function getAllCourse($pageno=1,$no_of_records_per_page=10) {
        $offset = ($pageno-1) * $no_of_records_per_page; 
        $sql = "SELECT * FROM tbl_course ORDER BY id LIMIT ".$no_of_records_per_page." OFFSET ".$offset."";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }
}
?>