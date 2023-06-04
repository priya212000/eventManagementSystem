<?php
$host='localhost';
$user='root';
$pass='';
$db='dbms_online_event_management';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
mysqli_select_db($con,"dbms_online_event_management")or die("no database");
session_start();
$a=$_POST['fid'];
$b=$_POST['fname'];
$c=$_SESSION['id'];

$e=mysqli_query($con,"select *  from facilities where facility_id=$a ");
if($e)
{
    $p=mysqli_fetch_array($e);
    $pd=$p['facility_id'];
    if($pd)
    {
        header("Location:./addfacility.php?error=Facility id already exists");
    }
}

$q=mysqli_query($con,"Insert into facilities values($a,'$b')");
if(!$q)
{
    echo "error". mysqli_error($con);

}
$q1=mysqli_query($con,"Insert into facilities_provided_by_admin values($a,$c)");
if(!$q1)
{
    echo "error". mysqli_error($con);
}

if($q)
{
    header("Location:./welcomeadministrator.php?id=Successfully added an volunteer");
}
else
  echo "error". mysqli_error($con);
?>