<?php 
require_once ("class/DBController.php");
require_once ("class/Student.php");
require_once ("class/Course.php");
class CourseSubscription
{
    private $db_handle;
    
    function __construct() {
        $this->db_handle = new DBController();
    }
    
    function addStudentsInCourses($student_ids, $course_ids) {
        for ($i = 0; $i < sizeof($student_ids); $i++) {
        $query = "INSERT INTO course_subscription (student_id,course_id) VALUES (?, ?)";
        $paramType = "ii";
        $paramValue = array(
            $student_ids[$i],
            $course_ids[$i]
        );
        
        $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
        }
        return $insertId;
    }

    function countSubscription() {
        $result = $this->db_handle->count_row('course_subscription');
        return $result;
    }
    
    function getAllSubscription($pageno=1,$no_of_records_per_page=10) {
        $offset = ($pageno-1) * $no_of_records_per_page; 
        $sql = "SELECT * FROM course_subscription ORDER BY id LIMIT ".$no_of_records_per_page." OFFSET ".$offset."";
        $result = $this->db_handle->runBaseQuery($sql);
        $full_array = array();
        $student_names = array();
        $course_names = array();
        foreach ($result as $k => $v) {
            $student = new Student();
            $student_result=$student->getStudentById($result[$k]["student_id"]);
            array_push($student_names,$student_result[0]['first_name'].' '.$student_result[0]['last_name']);
            $Course = new Course();
            $Course_result=$Course->getCourseById($result[$k]["course_id"]);
            array_push($course_names,$Course_result[0]['course_name']);
        }
        array_push($full_array,$student_names,$course_names);
        // print_r($full_array);
        // die();
        return $full_array;
    }
}
?>