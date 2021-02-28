<?php 
require_once ("class/DBController.php");
class Student
{
    private $db_handle;
    
    function __construct() {
        $this->db_handle = new DBController();
    }
    
    function addStudent($first_name, $last_name, $dob, $contact_no) {
        $query = "INSERT INTO tbl_student (first_name,last_name,dob,contact_no) VALUES (?, ?, ?, ?)";
        $paramType = "ssss";
        $paramValue = array(
            $first_name,
            $last_name,
            $dob,
            $contact_no
        );
        
        $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
        return $insertId;
    }
    
    function editStudent($first_name, $last_name, $dob, $contact_no, $student_id) {
        $query = "UPDATE tbl_student SET first_name = ?,last_name = ?,dob = ?,contact_no = ? WHERE id = ?";
        $paramType = "ssssi";
        $paramValue = array(
            $first_name,
            $last_name,
            $dob,
            $contact_no,
            $student_id
        );
        
        $this->db_handle->update($query, $paramType, $paramValue);
    }
    
    function deleteStudent($student_id) {
        $query = "DELETE FROM tbl_student WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $student_id
        );
        $this->db_handle->update($query, $paramType, $paramValue);
    }
    
    function getStudentById($student_id) {
        $query = "SELECT * FROM tbl_student WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $student_id
        );
        
        $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
        return $result;
    }


    function countStudent() {
        $result = $this->db_handle->count_row('tbl_student');
        return $result;
    }

    function getAllStudent($pageno=1,$no_of_records_per_page=10) {
        $offset = ($pageno-1) * $no_of_records_per_page; 
        $sql = "SELECT * FROM tbl_student ORDER BY id LIMIT ".$no_of_records_per_page." OFFSET ".$offset."";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }
}
?>