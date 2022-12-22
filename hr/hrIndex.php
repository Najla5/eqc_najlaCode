<?php
session_start();
echo '<div class="welcomMsg"> ';
echo '<p>'.$_SESSION['hrname'].'  '.'مرحبا  </p>';
echo '</div>';
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<head>
<link rel="stylesheet" type="text/css" href="/eqc/css/hrIndex.css"/>
<script defer src="include/‏‏validationJobs.js"></script>
</head>
<body>
<div id="cont">
<h2 id="text-content">لا توجد شركة مسجلة بهذا الحساب الرجاء إضافة شركة</h2>
<form method="post" action="add_company.php">
<input type="submit" name="next" class="submit" value="اضف شركة"/>
</form>
</div>
</body>
</html>