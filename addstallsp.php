<?php
$host='localhost';
$user='root';
$pass='';
$db='dbms_online_event_management';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
mysqli_select_db($con,"dbms_online_event_management")or die("no database");
session_start();
$a=$_POST['sid'];
$b=$_POST['sname'];
$c=$_SESSION['id'];
$d=$_POST['sloc'];
$e=$_POST['sso'];
$f=$_POST['soff'];
$que=mysqli_query($con,"select * from stalls where stall_id=$a");
$r=mysqli_fetch_array($que);
if($r)
header("Location:./addstalls.php?error=Stall id already exists");
$q1=mysqli_query($con,"Insert into stalls values($a,'$d','$b','$f')");
if(!$q1)
{
    echo "error". mysqli_error($con);
}
$aq=mysqli_query($con,"select * from sponsor where sponser_name='$e'");
if($aq)
$row=mysqli_fetch_array($aq);
else
echo "error". mysqli_error($con);
$m=$row['sponsor_id'];
$q=mysqli_query($con,"Insert into stall_sponsor values($m,$a)");
if($q&&$q1)
{
    header("Location:./welcomeadministrator.php?id=Successfully added a stall");
}
else
  echo "error". mysqli_error($con);
?>