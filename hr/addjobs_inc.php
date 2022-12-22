<?php
    include "conn.php";
    session_start();
    echo $_SESSION['name'];
    $_SESSION['Aid'];
    
    if(isset($_POST['submit'])){

       $jobName = $_POST['jobName'];
       $qualification = $_POST['qualification'];
       $experience=$_POST['experience'];
       $sdate=$_POST['sdate'];
       $edate=$_POST['edate'];


       $sql = "INSERT INTO `job`(jobName,qualification,experience,S_Date,E_Date,id_a,id_c)
       VALUES ('$jobName','$qualification','$experience','$sdate','$edate','$_SESSION['Aid']','');";
       if (mysqli_query($conn, $sql)) {
             echo "New record created successfully";
             header("location: ./admin_jobs.php");


       } else {

             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }
       mysqli_close($conn);

     }
