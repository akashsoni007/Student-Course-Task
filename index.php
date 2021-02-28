<?php
require_once ("class/DBController.php");
require_once ("class/Student.php");
require_once ("class/Course.php");
require_once ("class/CourseSubscription.php");

$db_handle = new DBController();
$no_of_records_per_page = 10;
// $action = "";
if (! empty($_GET["action"])) {
    $action = $_GET["action"];
}
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}

switch ($action) {
    case "course-add":
        if (isset($_POST['add'])) {
            $course_name = $_POST['course_name'];
            $course_detail = $_POST['course_detail'];
            //die('tt');
            $course = new Course();
            $insertId = $course->addCourse($course_name, $course_detail);
            //var_dump($insertId);
            //die('tt');
            if (empty($insertId)) {
                $response = array(
                    "message" => "Problem in Adding New Record",
                    "type" => "error"
                );
            } else {
                header("Location: index.php?action=course");
            }
        }
        require_once "web/course-add.php";
        break;
    
    case "course-edit":
        $course_id = $_GET["id"];
        $course = new Course();
        
        if (isset($_POST['add'])) {
            $course_name = $_POST['course_name'];
            $course_detail = $_POST['course_detail'];
            
            $course->editCourse($course_name, $course_detail, $course_id);
            
            header("Location: index.php?action=course");
        }
        
        $result = $course->getCourseById($course_id);
        require_once "web/course-edit.php";
        break;
    
    case "course-delete":
        $course_id = $_GET["id"];
        $course = new Course();
        
        $course->deleteCourse($course_id);
        
        $result = $course->getAllCourse();
        require_once "web/course.php";
        break;
    
    case "course":
        $course = new course();
        $count_rows = $course->countCourse();
        $total_rows = $count_rows[0]['total'];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        $result = $course->getAllCourse($pageno,$no_of_records_per_page);
        require_once "web/course.php";
        break;
    
    case "student-add":
        if (isset($_POST['add'])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $dob = "";
            if ($_POST["dob"]) {
                $dob_timestamp = strtotime($_POST["dob"]);
                $dob = date("Y-m-d", $dob_timestamp);
            }
            $contact_no = $_POST['contact_no'];
            
            $student = new Student();
            $insertId = $student->addStudent($first_name, $last_name, $dob, $contact_no);
            if (empty($insertId)) {
                $response = array(
                    "message" => "Problem in Adding New Record",
                    "type" => "error"
                );
            } else {
                header("Location: index.php");
            }
        }
        require_once "web/student-add.php";
        break;
    
    case "student-edit":
        $student_id = $_GET["id"];
        $student = new Student();
        
        if (isset($_POST['add'])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $dob = "";
            if ($_POST["dob"]) {
                $dob_timestamp = strtotime($_POST["dob"]);
                $dob = date("Y-m-d", $dob_timestamp);
            }
            $contact_no = $_POST['contact_no'];
            
            $student->editStudent($first_name, $last_name, $dob, $contact_no, $student_id);
            
            header("Location: index.php");
        }
        
        $result = $student->getStudentById($student_id);
        require_once "web/student-edit.php";
        break;
    
    case "student-delete":
        $student_id = $_GET["id"];
        $student = new Student();
        
        $student->deleteStudent($student_id);
        
        $result = $student->getAllStudent();
        require_once "web/student.php";
        break;
    
    case "course-subscription":
        if (isset($_POST['add'])) {
            $CourseSubscription = new CourseSubscription();
            $insertId = $CourseSubscription->addStudentsInCourses($_POST['student_id'], $_POST['course_id']);
            if (empty($insertId)) {
                $response = array(
                    "message" => "Problem in Adding New Record",
                    "type" => "error"
                );
            } else {
                header("Location: index.php?action=course-subscription-table");
            }
        }
        $student = new Student();
        $result_student = $student->getAllStudent();
        $course = new Course();
        $result_course = $course->getAllCourse();
        require_once "web/course-subscription.php";
        break;

    case "course-subscription-table":
        $CourseSubscription = new CourseSubscription();
        $count_rows = $CourseSubscription->countSubscription();
        $total_rows = $count_rows[0]['total'];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        $result = $CourseSubscription->getAllSubscription($pageno,$no_of_records_per_page);
        require_once "web/course_subscription_table.php";
        break;
    
    default:
        $student = new Student();
        $count_rows = $student->countStudent();
        $total_rows = $count_rows[0]['total'];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        $result = $student->getAllStudent($pageno,$no_of_records_per_page);
        require_once "web/student.php";
        break;
}
?>