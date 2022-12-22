<?php
//include 'addCompany_inc.php';
session_start();
echo $_SESSION['name'];
$_SESSION['Aid'];
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<head>
<link rel="stylesheet" type="text/css" href="css/admincss.css" />
<script defer src="include/‏‏validationJobs.js"></script>
</head>
<body>
  <div class="content">
<table>
  <tr>

    <td>
    <a href="job/admin_jobs.php"> <img width="110" height="110" src="img/jobb.png" />
      </a>
      <label id="labeljob"> JOBS </label>
</td>


    <td>
    <a href="hr_admin/admin_hrs.php"> <img width="110" height="110" src="img/hrr.png" />
      </a>
      <label id="labelHR"> HR </label>
</td>


    <td>
    <a href="company/viewCompany.php"><img width="110" height="110" src="img/enterprise.png" />
      </a>
      <label id="labelCOMPANY"> COMPANY </label>
</td>


    <td>
      <a href="student/admin_students.php"><img width="110" height="110" src="img/headhunting.png" />
      </a>
      <label id="labelSTUDENTS"> STUDENTS </label>
</td>

  </tr>
</table>
</div>
</body>
</html>
