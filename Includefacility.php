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
        
        <style>
            h1{
    text-align: center;
    color:royalblue;
    font-size: 40px;
}
h2{
    text-align: center;
    color:maroon;
    font-size: 30px;
}
h3{
    text-align:left;
    font-size: 20px;
    margin-bottom: 0px;
    
}
table[name=table],th[name=table],td
{
    width: 30%;
    margin-left: 35%;
   
    margin-bottom: 0%;
    margin-top: 0%;
    align-content: center;
    align-self: center;
    border: 1px solid black;
    text-align: center;
}
th{
    width: 100%;
}
fieldset
{ border-style:double;
    border-width: 5px;
    border-color:indianred;
}
body
{
    background-image: url(tech3.jpg);

}
input[type="submit"]
{
    margin-top: 5px;
    margin-left: 35%;
    padding: 10px;
    border-width: 2px;
    border-color: brown;
    width: 30%;
    color:blue;
    font-size: 15px;
    text-align: center;
    
    
    
}
            </style>
</head>
<body>
    <div>
    <h1>Techno fest</h1>
    <table>
    <tr>
    <th>
    <?php
    if(isset($_SESSION["name"])){
echo "<h3>You can select the Facility to include |".$_SESSION['name']."</h3> ";}?></th>
<th>
<a href="welcomestudent.php"><h3>Back</h3></a>
</th>
</tr>
</table>
<div>
<fieldset>
<?php
{$qry=mysqli_query($con,"SELECT * FROM facilities") or die("Qyery not obtained a");
?>
<h2>Facilities</h2>
<form action="includefacilityp.php"  method="POST">
<table name="table">
<tr>
<th name="table">Select and pariticipate</th>
<th name="table">Event_name</th>
<th name="table">Event_venue</th>
</tr><?php
$while=0;
while($row = mysqli_fetch_array($qry))
{  $id=$_SESSION['id'];
    $a=$row['facility_id'];
    $q=mysqli_query($con,"SELECT * FROM student_facilty where facilityid=$a and studentid=$id") or die("Qyery not obtained b");
    if($q)
    $r= mysqli_fetch_array($q);
    if($r['facilityid'])
    {
    continue;}
    echo "<tr>";
echo '<td><input type="radio" name="fid" align="right" value="'. htmlspecialchars($row['facility_id']) . '"></td>';
echo "<td>" . $row['facility_id'] . "</td>";
echo "<td>" . $row['facilityname'] . "</td>";
echo "</tr>";
$while=1; 
}
echo "</table>";
}
if($while==1)
{?>
<input type="submit" value="Include"/><?php
}
if($while==0)
{
?><h2>You have already included all facilities</h2>
<?php
}
?>
</form>
</fieldset>
</div>
</body>
</html>