<?php
   include "conn.php";
  
  ?> 
   <!DOCTYPE html>
<html>
<meta charset="utf-8" />
<head>
<script defer src="include/‏‏validationJobs.js"></script>
</head>
<body>
  <table>
    <tr>
      <th>
        HR name
      </th>
      <th>
      Hr Email
      </th>
      <th>
      Hr Password
      </th>
      <th>
      Hr Phone
      </th>
</tr>

<?php

$hid=$_GET['id'];

$sql = "SELECT * FROM `hr` where `HrID`= $hid "; 
    
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while ($row= $result->fetch_assoc()) {
    $row_HrName= $row['HrName'];
    $row_HrEmail= $row['HrEmail'];
    $row_HrPassword= $row['HrPassword'];


    
    $row_HrPhone= $row['HrPhone'];
}
}

            echo'<tr>';
            echo '<td>'.$row_HrName.'</td>';
            echo '<td>'.$row_HrEmail.'</td>'; 
            echo '<td>'.$row_HrPassword.'</td>';
            echo '<td>'.$row_HrPhone.'</td>';
            echo '</tr>';
               
?>
</body>
</html>



