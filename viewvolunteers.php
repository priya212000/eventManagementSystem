<?php
$host='localhost';
$user='root';
$pass='';
$db='dbms_online_event_management';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
mysqli_select_db($con,"dbms_online_event_management")or die("no database");
session_start();?>

<html>
<head>
        <link rel="stylesheet" type="text/css" href="Sam.css?version=51">
</head>
<body>
    <div>
    <h1>Techno fest</h1>
    <table>
    <tr>
    <th>
    <?php
    if(isset($_SESSION["name"])){
echo "<h3>You can view  volunteers now |".$_SESSION['name']."</h3> ";}?></th>
<th>
<a href="welcomeadministrator.php"><h3>Back</h3></a>
</th>
</tr>
</table>
<div>
<fieldset>
<?php
{$qry=mysqli_query($con,"SELECT * FROM volunteer") or die("Qyery not obtained");
?>
<h2>Volunteers</h2>
<table name="table">
<tr>
<th name="table">Volunteer_id</th>
<th name="table">Volunteer_name</th>
<th name="table">Volunteer_age</th>
<th name="table">Volunteer_phonenumber</th>
<th name="table">Volunteer_email id</th>

</tr><?php
while($row = mysqli_fetch_array($qry))
{  
   echo "<tr>";
   echo "<td>" . $row['volunteerid'] . "</td>";
   echo "<td>" . $row['vname'] . "</td>";
   echo "<td>" . $row['age'] . "</td>";
   echo "<td>" . $row['phoneno'] . "</td>";
   echo "<td>" . $row['emailid'] . "</td>";
  
   
   
   
   echo "</tr>";
   }
   echo "</table>";
   
   mysqli_close($con);
            
   }?>
   </fieldset>
   </div>
   </body>
   </html>