<?php
$host='localhost';
$user='root';
$pass='';
$db='dbms_online_event_management';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
mysqli_select_db($con,"dbms_online_event_management")or die("no database");
session_start();
$a=$_POST['eventid'];
$b=$_POST['ename'];
$c=$_POST['evenue'];
$d=$_POST['edate'];
$e=$_POST['etime'];
$f=$_POST['echief'];
$g=$_POST['espeaker'];
$h=$_POST['esponsor'];
$i=$_POST['eprize'];
$j=$_POST['ecert'];
$id=$_SESSION['id'];
$ap=mysqli_query($con,"select *  from events where event_id=$a ");
if($ap)
{
    $p=mysqli_fetch_array($e);

    $pd=$p['event_id'];
    if($pd)
    {
        header("Location:./addevent.php?error=Event id already exists");
    }
}
$qry=mysqli_query($con,"Insert into events values ($a,'$b','$c','$d','$e','$i','$j')");
$aq=mysqli_query($con,"select * from chiefguest where guest_name='$f'");


if($aq)
{
    $r1=mysqli_fetch_array($aq);
    $a1=$r1['guest_id'];
$q=mysqli_query($con,"Insert into chiefguest_events values($a,$a1)");
if(!$q)
echo "error". mysqli_error($con);

}
$bq=mysqli_query($con,"select * from speak_judges where name='$g'");
if($bq)
{
    $r2=mysqli_fetch_array($bq);
    $a2=$r2['speak_id'];
$q1=mysqli_query($con,"Insert into  event_speakers values ($a2,$a)");
if(!$q1)
echo "error". mysqli_error($con);
}
$cq=mysqli_query($con,"select * from sponsor where sponser_name='$h'");
if($cq)
{
    $r2=mysqli_fetch_array($cq);
    $a3=$r2['sponsor_id'];
$q2=mysqli_query($con,"Insert into  event_sponsors values ($a3,$a)");
if(!$q2)
echo "error". mysqli_error($con);
}
$q3=mysqli_query($con,"insert into events_created_by_admin values($a,$id)");
if(!$q3)
echo mysqli_error($con);
if($qry)
{
    header("Location:./welcomeadministrator.php?id=Successfully added an event");
}
else
  echo "error". mysqli_error($con);
?>