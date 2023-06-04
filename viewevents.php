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
echo "<h3>You can view  events now |".$_SESSION['name']."</h3> ";}?></th>
<th>
<a href="welcomeadministrator.php"><h3>Back</h3></a>
</th>
</tr>
</table>
<div>
<fieldset>
<?php
{$qry=mysqli_query($con,"SELECT * FROM events") or die("Qyery not obtained");
?>
<h2>Events</h2>
<table name="table">
<tr>
<th name="table">Event_id</th>
<th name="table">Event_name</th>
<th name="table">Event_venue</th>
<th name="table">Event_date</th>
<th name="table">Event_time</th>
<th name="table">Event_prizes</th>
<th name="table">Event_speakers</th>
<th name="table">Event_Certifications</th>
<th name="table">Event_sponsors</th>
<th name="table">Event_chiefguest</th>


</tr><?php

while($row = mysqli_fetch_array($qry))
{  $a=$row['event_id'];
    $q=mysqli_query($con,"SELECT * FROM chiefguest_events where attending_event_id=$a") or die("Qyery not obtained");
    if($q)
   $r= mysqli_fetch_array($q);
   $b=$r['guest_id'];
   $q=mysqli_query($con,"SELECT * FROM chiefguest where guest_id=$b") or die("Qyery not obtained");
   if($q)
   $r= mysqli_fetch_array($q);
   $cid=$r['guest_name'];
   $q=mysqli_query($con,"SELECT * FROM event_speakers where event_id=$a") or die("Qyery not obtained");
   if($q)
  $r= mysqli_fetch_array($q);
  $b=$r['event_speaker_id'];
  $q=mysqli_query($con,"SELECT * FROM speak_judges where speak_id=$b") or die("Qyery not obtained");
  if($q)
  $r= mysqli_fetch_array($q);
  $sn=$r['name'];
  $q=mysqli_query($con,"SELECT * FROM event_sponsors where event_id=$a") or die("Qyery not obtained");
   if($q)
  $r= mysqli_fetch_array($q);
  $b=$r['event_sponsors_id'];
  $q=mysqli_query($con,"SELECT * FROM sponsor where sponsor_id=$b") or die("Qyery not obtained");
  if($q)
  $r= mysqli_fetch_array($q);
  $sp=$r['sponser_name'];
echo "<tr>";
echo "<td>" . $row['event_id'] . "</td>";
echo "<td>" . $row['event_name'] . "</td>";
echo "<td>" . $row['event_venue'] . "</td>";
echo "<td>" . $row['event_date'] . "</td>";
echo "<td>" . $row['event_time'] . "</td>";
echo "<td>" . $row['event_prizes'] . "</td>";
echo "<td>" . $sn. "</td>";
echo "<td>" . $row['event_certifications'] . "</td>";
echo "<td>" . $sp. "</td>";
echo "<td>" . $cid. "</td>";



echo "</tr>";
}
echo "</table>";

mysqli_close($con);
         
}?>
</fieldset>
</div>
</body>
</html>