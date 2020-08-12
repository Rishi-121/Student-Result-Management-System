<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailid = $_POST['emailid'];
    $section = $_POST['section'];
    $rollno = $_POST['rollno'];
    $regno = $_POST['regno'];
    $math_2 = $_POST['math-2'];
    $dsa = $_POST['dsa'];
    $be = $_POST['be'];
    $chemistry = $_POST['chemistry'];
    $cetc = $_POST['cetc'];
    $subtotal = $_POST['subtotal'];
    $status = $_POST['status'];
    $fileToUpload = $_FILES['fileToUpload'];
    $fileName = $fileToUpload['name'];

    $con = mysqli_connect('localhost', 'root', '', 'student result management system', '3308');
    if ($con == false) {
        echo "Error in database connection!!";
    } else {
        $select = "SELECT * FROM `student_info` WHERE `regno`='$regno'";
        $result = mysqli_query($con, $select);
        $num = mysqli_num_rows($result);

        if ($num > 0) {
?>
            <script>
                alert("Name Already Exists");
                window.open('../service-pages/admin-exam-details-upload.html', '_self');
            </script>
            <?php
        } else {

            $fileDestination = '../assets/students/' . $fileName;
            move_uploaded_file($fileName, $fileDestination);

            $insert = "INSERT INTO `student_info`(`name`, `emailid`,`image`,`section`,`rollno`,`regno`,`math-2`,`dsa`,`be`,`chemistry`,`cetc`,`total`,`status`) VALUES ('$name','$emailid','$fileDestination','$section','$rollno','$regno','$math_2','$dsa','$be','$chemistry','$cetc','$subtotal','$status')";
            $row = mysqli_query($con, $insert);
            if ($row == true) {

            ?>
                <script>
                    alert('Details Added Successfully!');
                    window.open('../service-pages/admin-exam-details-upload.html', '_self');
                </script>
<?php

            } else {
                echo "error";
            }
        }
    }
}
?>