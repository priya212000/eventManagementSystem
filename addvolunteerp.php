<?php
$host='localhost';
$user='root';
$pass='';
$db='dbms_online_event_management';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
mysqli_select_db($con,"dbms_online_event_management")or die("no database");
session_start();
$a=$_POST['eventid'];
$b=$_POST['vname'];
$c=$_SESSION['id'];
$aq=mysqli_query($con,"select * from volunteer where vname='$b'");
if($aq)
{
    $r1=mysqli_fetch_array($aq);
    $a1=$r1['volunteerid'];
$q=mysqli_query($con,"Insert into volunteering_events values($a1,$a)");
if(!$q)
{
    echo "error". mysqli_error($con);

}
$q1=mysqli_query($con,"Insert into volunteer_added_by_admin values($a1,$c)");
if(!$q1)
{
    echo "error". mysqli_error($con);
}
}
if($q&&$q1)
{
    header("Location:./welcomeadministrator.php?id=Successfully added an volunteer");
}
else
  echo "error". mysqli_error($con);
?>