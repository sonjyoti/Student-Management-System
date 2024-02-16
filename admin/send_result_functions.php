<?php 
    function evalCreditScore($sub_id, $grade_point, $conn){
        $sql = "SELECT `Subject`.`paper_credit` AS `credit` FROM `Subject` WHERE `Subject`.`id` = ?;";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $sub_id);

        if (!mysqli_stmt_execute($stmt)) {
            mysqli_stmt_error($stmt);
        } else {
            $result = mysqli_stmt_get_result($stmt);
            if($sub_row = mysqli_fetch_assoc($result)) {
                $sub_credit = $sub_row['credit'];
            }
        }

        $creditScore = $sub_credit * $grade_point; 
        return $creditScore;
    }
    function evalLetterGrade($grade_point){
        switch ($grade_point) {
            case 1:
                return 'D';
            case 2:
                return 'D';
            case 3:
                return 'D';
            case 4:
                return 'D';
            case 5:
                return 'C';
            case 6:
                return 'B';
            case 7:
                return 'B+';
            case 8:
                return 'A';
            case 9:
                return 'A+';                
            case 10:
                return 'O';                        
            default:
                return 'E';
          }
    }
    if (isset($_POST['submitResult'])) {
        $grade_points = $_POST['gradePoint'];
        $st_id = $_POST['roll']; 
        $semester = $_SESSION['semester'];
        $letter_grade = '';
        $credit_point = 1;

        foreach ($grade_points as $subject_id => $grade_point) {
            $grade_point = intval($grade_point);
            $letter_grade = evalLetterGrade($grade_point);
            $credit_point = evalCreditScore($subject_id, $grade_point, $conn);
            $sql = "INSERT INTO `Result`(`student_id`, `semester`, `subject_id`, `grade_point`, `letter_grade`, `credit_point`) VALUES (?, ?, ?, ?, ?, ?);";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "iiiisi", $st_id, $semester, $subject_id, $grade_point, $letter_grade, $credit_point);
            if (!mysqli_stmt_execute($stmt)) {
                mysqli_stmt_error($stmt);
            }
        }
        header("Location: add_result.php");
        unset($_SESSION['course']);
        unset($_SESSION['semester']);
    }